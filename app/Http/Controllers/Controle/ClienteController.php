<?php

namespace App\Http\Controllers\Controle;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/cliente/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150,100], 1 => [600,400], 2 => [980,840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('cliente.visualizar');
        $clientes = Cliente::orderBy('nome', 'asc')->get();

        return view('controle.cliente.index', compact('clientes'));
    }

    public function editar(Cliente $cliente = null)
    {
        $data = [];

        if (isset($cliente->id)) {
            $this->verificaPermissao('cliente.alterar');
        array_push($data, 'cliente');
    }
else
{
$this->verificaPermissao('cliente.cadastrar');
}

        return view('controle.cliente.edit', compact($data));
    }

    public function salvar(Request $request, Cliente $cliente = null)
    {
        $input = $request->except('_token');

        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($cliente->id) {
        $this->verificaPermissao('cliente.alterar');
        if ($cliente->update($input)) {
                return redirect()->route('controle.cliente.index')->with('error', false);
    }

        } else {
    $this->verificaPermissao('cliente.cadastrar');
    $cliente = Cliente::create($input);
            return redirect()->route('controle.cliente.index')->with('error', false);
        }

        if (!$cliente->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Cliente $cliente)
{
    $this->verificaPermissao('cliente.excluir');

    if ($cliente and $cliente->delete()) {
    $imagem = $cliente->imagem;
    @unlink($this->destino['caminho'] . 'p/' . $imagem);
    @unlink($this->destino['caminho'] . 'm/' . $imagem);
    @unlink($this->destino['caminho'] . 'g/' . $imagem);
    return redirect()->route('controle.cliente.index')->with('error', false);
}
        return redirect()->route('controle.cliente.index')->with('error', true);
    }

}
