<?php

namespace App\Http\Controllers\Controle;

use App\PodcastMidia;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class PodcastMidiaController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/podcastmidia/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('podcastmidia.visualizar');
        $podcastmidias = PodcastMidia::orderBy('nome', 'asc')->get();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $podcastmidias,
            ]);
        }

        return view('controle.podcastmidia.index', compact('podcastmidias'));
    }

    public function editar(PodcastMidia $podcastmidia = null)
    {
        $data = [];

        if (isset($podcastmidia->id)) {
            $this->verificaPermissao('podcastmidia.alterar');
            array_push($data, 'podcastmidia');
        } else {
            $this->verificaPermissao('podcastmidia.cadastrar');
        }

        return view('controle.podcastmidia.edit', compact($data));
    }

    public function salvar(Request $request, PodcastMidia $podcastmidia = null)
    {
        $input = $request->except('_token');

        if ($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($podcastmidia->id) {
            $this->verificaPermissao('podcastmidia.alterar');
            if ($podcastmidia->update($input)) {

                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Mídia do Podcast atualizada.',
                        'data' => $podcastmidia->toArray(),
                    ]);
                }

                return redirect()->route('controle.podcastmidia.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('podcastmidia.cadastrar');
            $podcastmidia = PodcastMidia::create($input);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Mídia do Podcast criada.',
                    'data' => $podcastmidia->toArray(),
                ]);
            }

            return redirect()->route('controle.podcastmidia.index')->with('error', false);
        }

        if (!$podcastmidia->id) {

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Falha ao completar.',
                    'data' => false,
                ]);
            }

            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(PodcastMidia $podcastmidia)
    {
        $this->verificaPermissao('podcastmidia.excluir');

        if ($podcastmidia and $deleted = $podcastmidia->delete()) {
            $imagem = $podcastmidia->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Mídia do Podcast deletada.',
                    'deleted' => $deleted,
                ]);
            }

            return redirect()->route('controle.podcastmidia.index')->with('error', false);
        }
        return redirect()->route('controle.podcastmidia.index')->with('error', true);
    }

}
