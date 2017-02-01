<?php

namespace App\Http\Controllers\Controle;

use App\Agenda;
use App\Http\Controllers\Controller;
use App\Upload;
use Illuminate\Http\Request;


class AgendaController extends Controller
{
    public function __construct()
    {
        $this->destino = [
            'caminho' => storage_path() . '/data/agenda/', ##criar pasta se tiver upload
            'resolucao' => [0 => [150,100], 1 => [600,400], 2 => [980,840]],
        ];
    }

    public function index()
    {
        $this->verificaPermissao('agenda.visualizar');
        $agendas = Agenda::orderBy('nome', 'asc')->get();

        return view('controle.agenda.index', compact('agendas'));
    }

    public function editar(Agenda $agenda = null)
    {
        $data = [];

        if (isset($agenda->id)) {
            $this->verificaPermissao('agenda.alterar');
            array_push($data, 'agenda');
        }
        else
        {
            $this->verificaPermissao('agenda.cadastrar');
        }

        return view('controle.agenda.edit', compact($data));
    }

    public function salvar(Request $request, Agenda $agenda = null)
    {
        $input = $request->except('_token');
        $input['permanente'] = isset($input['permanente']) ? 1 : 0;
//        $input['ativo'] = ($input['ativo']) ? 1 : 0;


        if($request->hasFile('imagem')) {
            $imagem = $request->file();
            $input['imagem'] = Upload::salva($imagem, $this->destino, false);
        }

        if ($agenda->id) {
            $this->verificaPermissao('agenda.alterar');
            if ($agenda->update($input)) {
                return redirect()->route('controle.agenda.index')->with('error', false);
            }

        } else {
            $this->verificaPermissao('agenda.cadastrar');
            $agenda = Agenda::create($input);
            return redirect()->route('controle.agenda.index')->with('error', false);
        }

        if (!$agenda->id) {
            return redirect()->back()->withInput()->with('error', true);
        }

    }

    public function excluir(Agenda $agenda)
    {
        $this->verificaPermissao('agenda.excluir');

        if ($agenda and $agenda->delete()) {
            $imagem = $agenda->imagem;
            @unlink($this->destino['caminho'] . 'p/' . $imagem);
            @unlink($this->destino['caminho'] . 'm/' . $imagem);
            @unlink($this->destino['caminho'] . 'g/' . $imagem);
            return redirect()->route('controle.agenda.index')->with('error', false);
        }
        return redirect()->route('controle.agenda.index')->with('error', true);
    }

}
