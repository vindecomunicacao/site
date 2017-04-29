<?php

namespace App\Http\Controllers\Controle;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class BannerController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/banner/', ##criar pasta se tiver upload
            'resolucao' => [0 => [384,116], 1 => [640,194], 2 => [1920,580]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('banner.visualizar');
        $banners = Banner::orderBy('nome', 'asc')->get();

        return view('controle.banner.index', compact('banners'));
    }

    public function edit(Banner $banner = null)
    {
        $data = [];

        if (isset($banner->id)) {
            $this->verificaPermissao('banner.alterar');
            array_push($data, 'banner');
        }
        else
        {
            $this->verificaPermissao('banner.cadastrar');
        }

        return view('controle.banner.edit', compact($data));
    }

    public function salvar(Request $request, Banner $banner = null)
    {
        $input = $request->except('_token');

        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($banner->id) {
            $this->verificaPermissao('banner.alterar');
            if ($banner->update($input)) {
                return redirect()->route('controle.banner.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('banner.cadastrar');
            $banner = Banner::create($input);
            return redirect()->route('controle.banner.index')->with('error', false);
        }

        if (!$banner->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Banner $banner)
    {
        $this->verificaPermissao('banner.excluir');

        if ($banner and $banner->delete()) {
            $imagem = $banner->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);
            return redirect()->route('controle.banner.index')->with('error', false);
        }
        return redirect()->route('controle.banner.index')->with('error', true);
    }

}
