<?php

namespace App\Http\Controllers\Controle;

use App\Celula;
use App\Http\Controllers\Controller;
use App\Rede;
use App\Upload;
use App\Usuario;
use Illuminate\Http\Request;


class CelulaController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/celula/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('celula.visualizar');
        $celulas = Celula::orderBy('nome', 'asc')->get();

        return view('controle.celula.index', compact('celulas'));
    }

    public function editar(Celula $celula = null)
    {
        $data = ['redes','lideres'];

        $redes = Rede::orderBy('nome','asc')->get()->lists('nome', 'id')->toArray();
        $lideres = Usuario::orderBy('nome','asc')->get()->lists('nome', 'id')->toArray();

        if (isset($celula->id)) {
            $this->verificaPermissao('celula.alterar');
            array_push($data, 'celula');
        } else {
            $this->verificaPermissao('celula.cadastrar');
        }

        return view('controle.celula.edit', compact($data));
    }

    public function salvar(Request $request, Celula $celula = null)
    {
        $input = $request->except('_token');

        if ($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($celula->id) {
            $this->verificaPermissao('celula.alterar');
            if ($celula->update($input)) {
                return redirect()->route('controle.celula.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('celula.cadastrar');
            $celula = Celula::create($input);
            return redirect()->route('controle.celula.index')->with('error', false);
        }

        if (!$celula->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Celula $celula)
    {
        $this->verificaPermissao('celula.excluir');

        if ($celula and $celula->delete()) {
            $imagem = $celula->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);
            return redirect()->route('controle.celula.index')->with('error', false);
        }
        return redirect()->route('controle.celula.index')->with('error', true);
    }

}
