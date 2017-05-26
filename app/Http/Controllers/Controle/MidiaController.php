<?php

namespace App\Http\Controllers\Controle;

use App\Midia;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class MidiaController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/midia/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('midia.visualizar');
        $midias = Midia::orderBy('nome', 'asc')->get();

        if (request()->wantsJson()) {
            return response()->json([
                'data' => $midias,
            ]);
        }

        return view('controle.midia.index', compact('midias'));
    }

    public function editar(Midia $midia = null)
    {
        $data = [];

        if (isset($midia->id)) {
            $this->verificaPermissao('midia.alterar');
            array_push($data, 'midia');
        } else {
            $this->verificaPermissao('midia.cadastrar');
        }

        return view('controle.midia.edit', compact($data));
    }

    public function salvar(Request $request, Midia $midia = null)
    {
        $input = $request->except('_token');

        if ($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($midia->id) {
            $this->verificaPermissao('midia.alterar');
            if ($midia->update($input)) {

                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Mídia atualizada.',
                        'data' => $midia->toArray(),
                    ]);
                }

                return redirect()->route('controle.midia.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('midia.cadastrar');
            $midia = Midia::create($input);

            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Mídia criada.',
                    'data' => $midia->toArray(),
                ]);
            }

            return redirect()->route('controle.midia.index')->with('error', false);
        }

        if (!$midia->id) {
            if ($request->wantsJson()) {
                return response()->json([
                    'message' => 'Falha ao completar.',
                    'data' => false,
                ]);
            }

            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Midia $midia)
    {
        $this->verificaPermissao('midia.excluir');

        if ($midia and $deleted = $midia->delete()) {
            $imagem = $midia->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);

            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Mídia deletada.',
                    'deleted' => $deleted,
                ]);
            }

            return redirect()->route('controle.midia.index')->with('error', false);
        }
        return redirect()->route('controle.midia.index')->with('error', true);
    }

}
