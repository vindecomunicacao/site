<?php

namespace App\Http\Controllers\Controle;

use App\Http\Controllers\Controller;
use App\Rede;
use App\Upload;
use App\Usuario;
use Illuminate\Http\Request;


class RedeController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/rede/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150, 100], 1 => [600, 400], 2 => [980, 840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('rede.visualizar');
        $redes = Rede::orderBy('nome', 'asc')->get();

        return view('controle.rede.index', compact('redes'));
    }

    public function editar(Rede $rede = null)
    {
        $data = ['pastores', 'supervisores', 'discipuladores'];

        $pastores = Usuario::where('grupo_usuario_id', 2)->get()->lists('nome', 'id')->toArray();
        $supervisores = Usuario::where('grupo_usuario_id', 3)->get()->lists('nome', 'id')->toArray();
        $discipuladores = Usuario::where('grupo_usuario_id', 4)->get()->lists('nome', 'id')->toArray();

        if (isset($rede->id)) {
            $this->verificaPermissao('rede.alterar');
            array_push($data, 'rede');
        } else {
            $this->verificaPermissao('rede.cadastrar');
        }

        return view('controle.rede.edit', compact($data));
    }

    public function salvar(Request $request, Rede $rede = null)
    {
        $input = $request->except('_token');

        if ($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($rede->id) {
            $this->verificaPermissao('rede.alterar');
            if ($rede->update($input)) {
                return redirect()->route('controle.rede.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('rede.cadastrar');
            $rede = Rede::create($input);
            return redirect()->route('controle.rede.index')->with('error', false);
        }

        if (!$rede->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Rede $rede)
    {
        $this->verificaPermissao('rede.excluir');

        if ($rede and $rede->delete()) {
            $imagem = $rede->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);
            return redirect()->route('controle.rede.index')->with('error', false);
        }
        return redirect()->route('controle.rede.index')->with('error', true);
    }

}
