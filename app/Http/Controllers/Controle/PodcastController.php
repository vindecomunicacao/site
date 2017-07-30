<?php

namespace App\Http\Controllers\Controle;

use App\Podcast;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;
use Torann\PodcastFeed\Facades\PodcastFeed;


class PodcastController extends Controller
{
    public function __construct()
    {
        $this->destinoArquivos = storage_path() . '/data/podcast/arquivos/';
        $this->destinoImagens = [
            'caminho' => storage_path() . '/data/podcast/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index(Request $request)
    {
        $data = ['podcasts', 'tags'];

        $this->verificaPermissao('podcast.visualizar');

        $podcasts = Podcast::orderBy('created_at', 'desc');
        if($request->has('tags') && !empty($request->get('tags')))
            foreach(explode(',', $request->get('tags')) as $tag)
                $podcasts = $podcasts->orWhere('podcasts.tags', 'like', strtolower("%{$tag}%"));

        if($request->has('author_id') && !empty($request->get('author_id')))
            $podcasts = $podcasts->where('podcasts.author_id', $request->get('author_id'));

        $podcasts = $podcasts->paginate(4);

        $tags = Podcast::all()->reduce(function($tags, $podcast){
            return $tags->merge(explode(',', $podcast->tags))->unique();
        }, collect())->values();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $podcasts,
            ]);
        }

        return view('controle.podcast.index', compact($data));
    }

    public function editar(Podcast $podcast = null)
    {
        $data = ['tags'];
        $tags = Podcast::all()->reduce(function($tags, $podcast){
            return $tags->merge(explode(',', $podcast->tags))->unique();
        }, collect())->values();

        if (isset($podcast->id)) {
            $this->verificaPermissao('podcast.alterar');
            array_push($data, 'podcast');
        } else {
            $this->verificaPermissao('podcast.cadastrar');
        }

        return view('controle.podcast.edit', compact($data));
    }

    public function salvar(Request $request, Podcast $podcast = null)
    {
        $input = $request->except('_token');
        
        $this->validate($request, [
            'arquivo' => "size:64000" . !$podcast->id ? '|required' : '',
            'imagem' => 'dimensions:ratio=1/1,min_width=500,min_height=500' . (!$podcast->id ? '|required' : '')
        ], [], [
            'arquivo' => 'Podcast',
            'imagem' => 'Imagem'
        ]);

        if(array_key_exists('imagem', $input)) {
            $imagem = $request->file('imagem');
            $input['imagem'] = Upload::salva([$imagem], $this->destinoImagens, false);
        }

        if(array_key_exists('arquivo', $input)) {
            $podcastFile = $request->file('arquivo');
            $podcastFileName = str_slug(pathinfo($podcastFile->getClientOriginalName(), PATHINFO_FILENAME));
            $podcastFileExtensao = $podcastFile->getClientOriginalExtension();

            $podcastNewFileName = $podcastFileName . '_' . rand(1000, 9999) . '.' . $podcastFileExtensao;
            $input['arquivo'] = $podcastFile->move($this->destinoArquivos, $podcastNewFileName)->getFilename();
        }

        $input['tags'] = join(',',
            array_map(function($tag){
                return strtolower(str_outWeirdChar($tag));
            }, explode(',', $request->get('tags')))
        );

        if ($podcast->id) {
            $this->verificaPermissao('podcast.alterar');
            if ($podcast->update($input)) {

                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Podcast atualizada.',
                        'data' => $podcast->toArray(),
                    ]);
                }

                return redirect()->route('controle.podcast.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('podcast.cadastrar');
            $podcast = Podcast::create($input);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Podcast criada.',
                    'data' => $podcast->toArray(),
                ]);
            }

            return redirect()->route('controle.podcast.index')->with('error', false);
        }

        if (!$podcast->id) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Falha ao completar.',
                    'data' => false,
                ]);
            }
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Podcast $podcast)
    {
        $this->verificaPermissao('podcast.excluir');

        if ($podcast and $deleted = $podcast->delete()) {
            @unlink($this->destinoImagens['caminho'] . 'p/' . $podcast->imagem);
            @unlink($this->destinoImagens['caminho'] . 'm/' . $podcast->imagem);
            @unlink($this->destinoImagens['caminho'] . 'g/' . $podcast->imagem);
            @unlink($this->destinoArquivos . $podcast->arquivo);

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Podcast deletado.',
                    'deleted' => $deleted,
                ]);
            }

            return redirect()->route('controle.podcast.index')->with('error', false);
        }
        return redirect()->route('controle.podcast.editar', [$podcast->id])->with('error', true);
    }

    public function rss(){
        $podcasts = Podcast::orderBy('created_at', 'desc')->get();
        foreach($podcasts as $podcast) {
            $podcastPath = $this->destinoArquivos . $podcast->arquivo;

            $getID3 = new \getID3();
            $ThisFileInfo = $getID3->analyze($podcastPath);

            PodcastFeed::addMedia([
                'title'       => "{$podcast->titulo} - {$podcast->subtitulo}",
                'description' => $podcast->descricao,
                'publish_at'  => $podcast->created_at,
                'guid'        => route('controle.podcast.edit', $podcast->id),
                'url'         => route('image.render', ['podcast', 'arquivos', $podcast->arquivo ]),
                'type'        => $ThisFileInfo['mime_type'],
                'duration'    => $ThisFileInfo['playtime_string'],
                'image'       => route('image.render', ['podcast', 'g', $podcast->imagem ])
            ]);
        }

        return response(PodcastFeed::toString(), 200, ['Content-Type' => 'text/xml']);
    }
}
