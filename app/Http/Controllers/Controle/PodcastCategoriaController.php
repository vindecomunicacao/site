<?php

namespace App\Http\Controllers\Controle;

use App\PodcastCategoria;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class PodcastCategoriaController extends Controller
{
    public function index()
    {
        $this->verificaPermissao('podcastcategoria.visualizar');
        $podcastcategorias = PodcastCategoria::orderBy('nome', 'asc')->get();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $podcastcategorias,
            ]);
        }

        return view('controle.podcastcategoria.index', compact('podcastcategorias'));
    }

    public function editar(PodcastCategoria $podcastcategoria = null)
    {
        $data = [];

        if (isset($podcastcategoria->id)) {
            $this->verificaPermissao('podcastcategoria.alterar');
            array_push($data, 'podcastcategoria');
        } else {
            $this->verificaPermissao('podcastcategoria.cadastrar');
        }

        return view('controle.podcastcategoria.edit', compact($data));
    }

    public function salvar(Request $request, PodcastCategoria $podcastcategoria = null)
    {
        $input = $request->except('_token');

        if ($podcastcategoria->id) {
            $this->verificaPermissao('podcastcategoria.alterar');
            if ($podcastcategoria->update($input)) {
                
                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Categoria atualizada.',
                        'data' => $podcastcategoria->toArray(),
                    ]);
                }
                
                return redirect()->route('controle.podcastcategoria.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('podcastcategoria.cadastrar');
            $podcastcategoria = PodcastCategoria::create($input);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Categoria criada.',
                    'data' => $podcastcategoria->toArray(),
                ]);
            }

            return redirect()->route('controle.podcastcategoria.index')->with('error', false);
        }

        if (!$podcastcategoria->id) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Falha ao completar.',
                    'data' => false,
                ]);
            }

            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(PodcastCategoria $podcastcategoria)
    {
        $this->verificaPermissao('podcastcategoria.excluir');

        if ($podcastcategoria and $deleted = $podcastcategoria->delete()) {

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Categoria deletada.',
                    'deleted' => $deleted,
                ]);
            }

            return redirect()->route('controle.podcastcategoria.index')->with('error', false);
        }

        return redirect()->route('controle.podcastcategoria.index')->with('error', true);
    }

}
