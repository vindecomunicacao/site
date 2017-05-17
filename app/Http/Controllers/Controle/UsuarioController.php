<?php

namespace App\Http\Controllers\Controle;

use App\Departamento;
use App\GrupoUsuario;
use App\Http\Requests\Controle\UsuarioRequest;
use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;


class UsuarioController extends Controller
{
    
    public function index()
    {
        $this->verificaPermissao('usuario.visualizar');
        $usuarios = Usuario::orderBy('nome', 'asc')->get();

        return view('controle.usuario.index', compact('usuarios'));
    }

    public function editar(Usuario $usuario = null)
    {

        $data = ['grupos', 'departamentos'];

        $grupos = GrupoUsuario::where('id', '<>', 1)->orderBy('id', 'asc')->get()->lists('nome','id')->toArray();
        $departamentos = Departamento::orderBy('departamento')->get()->lists('departamento','id')->toArray();

        if (isset($usuario->id)) {
            $this->verificaPermissao('usuario.alterar');
            array_push($data, 'usuario');
        }
        else
        {
            //Comentado para dar liberdade de todos os membros cadastrarem-se
            //$this->verificaPermissao('usuario.cadastrar');
        }

        return view('controle.usuario.edit', compact($data));
    }

    public function salvar(UsuarioRequest $request, Usuario $usuario = null)
    {
        $input = $request->except('_token');
        if($input['password'] <> $input['confirme']) {
            unset($input['password']);
        }

        if ($usuario->id) {
            $this->verificaPermissao('usuario.alterar');
            if ($usuario->update($input)) {
                return redirect()->route('controle.usuario.index')->with('error', false);
            }

        } else {
            /*
              //Comentado para dar liberdade de todos os membros cadastrarem-se
              $this->verificaPermissao('usuario.cadastrar');
              $usuario = Usuario::create($input);
              return redirect()->route('controle.usuario.index')->with('error', false);
             */

            try {
                $data = $request->all();
                $data['password'] = bcrypt($data['password']);

                $user = Usuario::create($data);
                return view('controle.usuario.edit', compact('user'));
            } catch (Exception $e){
                return redirect('/cadastromembros')->withInputs($request->all())->withErrors(["Falha ao Cadastrar"]);
            }
        }

        if (!$usuario->id) {
            return redirect()->route('controle.usuario.edit', $usuario)->with('error', true);
        }

    }

    public function excluir(Usuario $usuario)
    {
        $this->verificaPermissao('usuario.excluir');

        if ($usuario and $usuario->delete()) {
            return redirect()->route('controle.grupo.index')->with('error', false);
        }
        return redirect()->route('controle.grupo.index')->with('error', true);
    }

}
