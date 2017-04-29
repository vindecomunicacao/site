<?php

namespace App\Http\Controllers\Controle;

use App\Artigo;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class ArtigoController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/artigo/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150,100], 1 => [600,400], 2 => [980,840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('artigo.visualizar');
        $artigos = Artigo::orderBy('nome', 'asc')->get();

        return view('controle.artigo.index', compact('artigos'));
    }

    public function editar(Artigo $artigo = null)
    {
        $data = [];

        if (isset($artigo->id)) {
            $this->verificaPermissao('artigo.alterar');
        array_push($data, 'artigo');
    }
else
{
$this->verificaPermissao('artigo.cadastrar');
}

        return view('controle.artigo.edit', compact($data));
    }

    public function salvar(Request $request, Artigo $artigo = null)
    {
        $input = $request->except('_token');

        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($artigo->id) {
        $this->verificaPermissao('artigo.alterar');
        if ($artigo->update($input)) {
                return redirect()->route('controle.artigo.index')->with('error', false);
    }

        } else {
    $this->verificaPermissao('artigo.cadastrar');
    $artigo = Artigo::create($input);
            return redirect()->route('controle.artigo.index')->with('error', false);
        }

        if (!$artigo->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Artigo $artigo)
{
    $this->verificaPermissao('artigo.excluir');

    if ($artigo and $artigo->delete()) {
    $imagem = $artigo->imagem;
    @unlink($this->destino['caminho'] . 'p/' . $imagem);
    @unlink($this->destino['caminho'] . 'm/' . $imagem);
    @unlink($this->destino['caminho'] . 'g/' . $imagem);
    return redirect()->route('controle.artigo.index')->with('error', false);
}
        return redirect()->route('controle.artigo.index')->with('error', true);
    }

}
