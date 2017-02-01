<?php

use App\Permissao;
use App\Rotas;
use App\Transacao;
use Illuminate\Database\Seeder;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('TRUNCATE permissao');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $transacaos = Transacao::all()->lists('id')->toArray();
        foreach ($transacaos as $transacao_id) {
            Permissao::create([
                'grupo_usuario_id' => 1,
                'transacao_id' => $transacao_id
            ]);
        }
    }
}
