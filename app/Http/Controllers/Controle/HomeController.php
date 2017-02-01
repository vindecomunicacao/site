<?php

namespace App\Http\Controllers\Controle;

use App\CategoriaTransacao;
use App\Http\Controllers\Controller;
use App\Transacao;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function imageRender($path, $tamanho, $imagem)
    {
        $path = storage_path("/data/{$path}/{$tamanho}/") . $imagem;

        if(is_file($path)) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $path);
            $length = filesize($path);

            $file = readfile($path);
        } else {
            return response('', 404);
        }

        return response($file)->header('Content-Type', $mime)->header('Content-length', $length);
    }

    public function index()
    {
        return view('controle.home.index');
    }

    public function rota($nome)
    {
        $nome = ucwords(camel_case($nome));

        $search = ['##NOME##', '##Nome##', '##nome##'];
        $replace = [strtoupper($nome), ucfirst($nome), strtolower($nome)];

        chmod(app_path('Http/Controllers/Controle'), 0777);
        chmod(app_path('Http/routes.php'), 0777);

        ############################ CRIA ROTA #####################################
        #dar permissão no arquivos routes.php
        $modelo_rota = file_get_contents(storage_path('modelos/') . 'rotas.php');
        $routes_php = file_get_contents(app_path('Http/') . 'routes.php');

        $modelo_rota = str_replace($search, $replace, $modelo_rota);
        $routes_php = str_replace('##NOVASROTAS##', $modelo_rota, $routes_php);

        File::put(app_path('Http/') . 'routes.php', $routes_php);
        ############################### CONTROLLER ###################################

        $controller = file_get_contents(storage_path('modelos/') . 'controller.php');
        $controller = str_replace($search, $replace, $controller);
        File::put(app_path('Http/Controllers/Controle/') . ucfirst($nome) . 'Controller.php', $controller);

        ################################# PERMISSÃO ###################################
        $categoria_transacao = CategoriaTransacao::create(['nome' => ucfirst($nome)]);
        $permissoes = ['visualizar','cadastrar', 'alterar', 'excluir'];

        #########teste
        $categoriaTransacaoTableSeeder = file_get_contents(database_path('seeds/') . 'CategoriaTransacaoTableSeeder.php');
        $transacaoTableSeeder = file_get_contents(database_path('seeds/') . 'TransacaoTableSeeder.php');

        $categoriaTransacaoTableSeeder = str_replace('##NOVACATEGORIATRANSACAO##', "\n            ['id' => {$categoria_transacao->id}, 'nome' => '".ucwords($nome)."', 'ordem' => 0], ##NOVACATEGORIATRANSACAO##", $categoriaTransacaoTableSeeder);
        File::put(database_path('seeds/') . 'CategoriaTransacaoTableSeeder.php', $categoriaTransacaoTableSeeder);

        $transacaoTableSeeder = str_replace('##NOVATRANSACAO##', '# ' . ucfirst($nome) . "        ##ADDTRANSACAO##", $transacaoTableSeeder);

        #############

        foreach ($permissoes as $permissao) {
            $transacao = Transacao::create([
                'categoria_id' => $categoria_transacao->id,
                'permissao' => strtolower($nome) . '.' . $permissao,
                'label' => ucwords($permissao)
            ]);
            $insert[] = ['grupo_usuario_id' => 1, 'transacao_id' => $transacao->id];

            $transacaoSeeder = "
        Transacao::create([
            'categoria_id' => {$categoria_transacao->id},
            'permissao' => '{$transacao->permissao}',
            'label' => '{$transacao->label}'
        ]);
        ##ADDTRANSACAO##";

            $transacaoTableSeeder = str_replace('##ADDTRANSACAO##', $transacaoSeeder , $transacaoTableSeeder);

        }

        $transacaoTableSeeder = str_replace('##ADDTRANSACAO##', "##NOVATRANSACAO##\n", $transacaoTableSeeder);


        File::put(database_path('seeds/') . 'TransacaoTableSeeder.php', $transacaoTableSeeder);

        DB::table('permissao')->insert($insert);

        $permissao = Auth::user()->grupo_usuario->permissao->lists('permissao', 'id')->toArray();
        session(['permissao' => $permissao]);


        ############################### MENU ############################################
        $view_controle = resource_path('views/layout/') . 'controle.blade.php';
        $controle = file_get_contents($view_controle);
        $rota_index = "{{ route('controle.{$nome}.index') }}";
        $novaopcao = '<li><a href="'.strtolower($rota_index).'">'.ucwords($nome).'</a></li>' . "\n                                      {{--##NOVAOPCAO##--}}";
        $controle = str_replace('{{--##NOVAOPCAO##--}}', $novaopcao, $controle);

        File::put($view_controle, $controle);

//        $out = shell_exec('cd ..;php artisan make:model ' . ucfirst($nome) . ' -m');
        Artisan::call('make:model', ['name' => $nome, '-m' => 1]);

        return '<br/><br/>Controller criado, rotas adicionadas, model e migrations criados.';
    }
}
