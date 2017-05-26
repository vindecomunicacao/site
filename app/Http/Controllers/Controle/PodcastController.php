<?php

namespace App\Http\Controllers\Controle;

use App\Podcast;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class PodcastController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/podcast/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('podcast.visualizar');
        $podcasts = Podcast::orderBy('nome', 'asc')->get();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $podcasts,
            ]);
        }

        return view('controle.podcast.index', compact('podcasts'));
    }

    public function editar(Podcast $podcast = null)
    {
        $data = [];

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

        if ($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

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
            $imagem = $podcast->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Podcast deletado.',
                    'deleted' => $deleted,
                ]);
            }

            return redirect()->route('controle.podcast.index')->with('error', false);
        }
        return redirect()->route('controle.podcast.index')->with('error', true);
    }

}
