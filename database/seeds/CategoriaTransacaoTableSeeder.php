<?php

use App\CategoriaTransacao;
use Illuminate\Database\Seeder;

class CategoriaTransacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('TRUNCATE categoria_transacaos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categorias = [
            ['id' => 1, 'nome' => 'Grupo de Usuário'],
            ['id' => 2, 'nome' => 'Usuário'],
            ['id' => 3, 'nome' => 'Permissão'],
            ['id' => 4, 'nome' => 'Log'],
            ['id' => 5, 'nome' => 'Contato', 'ordem' => 1],
            ['id' => 6, 'nome' => 'Galeria', 'ordem' => 2],
            ['id' => 7, 'nome' => 'Banner', 'ordem' => 3],
            ['id' => 8, 'nome' => 'Celula', 'ordem' => 0], 
            ['id' => 9, 'nome' => 'Rede', 'ordem' => 0],
            ['id' => 10, 'nome' => 'Noticia', 'ordem' => 0],
            ['id' => 11, 'nome' => 'Agenda', 'ordem' => 0], 
            ['id' => 13, 'nome' => 'Artigo', 'ordem' => 0], 
            ['id' => 14, 'nome' => 'Cliente', 'ordem' => 0], ##NOVACATEGORIATRANSACAO##
        ];

        foreach ($categorias as $categoria) {
            CategoriaTransacao::create($categoria);
        }
    }
}
