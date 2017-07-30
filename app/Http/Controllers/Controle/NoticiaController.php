<?php

namespace App\Http\Controllers\Controle;

use App\Noticia;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/noticia/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150,150], 1 => [600,350], 2 => [900,500]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('noticia.visualizar');
        $noticias = Noticia::orderBy('nome', 'asc')->get();

        return view('controle.noticia.index', compact('noticias'));
    }

    public function editar(Noticia $noticia = null)
    {
        $data = [];

        if (isset($noticia->id)) {
            $this->verificaPermissao('noticia.alterar');
        array_push($data, 'noticia');
    }
else
{
$this->verificaPermissao('noticia.cadastrar');
}

        return view('controle.noticia.edit', compact($data));
    }

    public function salvar(Request $request, Noticia $noticia = null)
    {
        $input = $request->except('_token');

        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($noticia->id) {
        $this->verificaPermissao('noticia.alterar');
        if ($noticia->update($input)) {
                return redirect()->route('controle.noticia.index')->with('error', false);
    }

        } else {
    $this->verificaPermissao('noticia.cadastrar');
    $noticia = Noticia::create($input);
            return redirect()->route('controle.noticia.index')->with('error', false);
        }

        if (!$noticia->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Noticia $noticia)
{
    $this->verificaPermissao('noticia.excluir');

    if ($noticia and $noticia->delete()) {
    $imagem = $noticia->imagem;
    @unlink($this->destino['caminho'] . 'p/' . $imagem);
    @unlink($this->destino['caminho'] . 'm/' . $imagem);
    @unlink($this->destino['caminho'] . 'g/' . $imagem);
    return redirect()->route('controle.noticia.index')->with('error', false);
}
        return redirect()->route('controle.noticia.index')->with('error', true);
    }

}
