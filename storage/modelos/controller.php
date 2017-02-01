<?php

namespace App\Http\Controllers\Controle;

use App\##Nome##;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class ##Nome##Controller extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/##nome##/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150,100], 1 => [600,400], 2 => [980,840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('##nome##.visualizar');
        $##nome##s = ##Nome##::orderBy('nome', 'asc')->get();

        return view('controle.##nome##.index', compact('##nome##s'));
    }

    public function editar(##Nome## $##nome## = null)
    {
        $data = [];

        if (isset($##nome##->id)) {
            $this->verificaPermissao('##nome##.alterar');
        array_push($data, '##nome##');
    }
else
{
$this->verificaPermissao('##nome##.cadastrar');
}

        return view('controle.##nome##.edit', compact($data));
    }

    public function salvar(Request $request, ##Nome## $##nome## = null)
    {
        $input = $request->except('_token');

        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($##nome##->id) {
        $this->verificaPermissao('##nome##.alterar');
        if ($##nome##->update($input)) {
                return redirect()->route('controle.##nome##.index')->with('error', false);
    }

        } else {
    $this->verificaPermissao('##nome##.cadastrar');
    $##nome## = ##Nome##::create($input);
            return redirect()->route('controle.##nome##.index')->with('error', false);
        }

        if (!$##nome##->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(##Nome## $##nome##)
{
    $this->verificaPermissao('##nome##.excluir');

    if ($##nome## and $##nome##->delete()) {
    $imagem = $##nome##->imagem;
    @unlink($this->destino['caminho'] . 'p/' . $imagem);
    @unlink($this->destino['caminho'] . 'm/' . $imagem);
    @unlink($this->destino['caminho'] . 'g/' . $imagem);
    return redirect()->route('controle.##nome##.index')->with('error', false);
}
        return redirect()->route('controle.##nome##.index')->with('error', true);
    }

}
