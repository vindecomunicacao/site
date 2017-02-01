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
            ['id' => 31, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 32, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 33, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 34, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 35, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 36, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 37, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 38, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 39, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 40, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 41, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 42, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 43, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 44, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 45, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 46, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 47, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 48, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 49, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 50, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 51, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 53, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 54, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 55, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 56, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 57, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 58, 'nome' => 'Teste1', 'ordem' => 0],             ['id' => 59, 'nome' => 'Teste1', 'ordem' => 0],             ['id' => 60, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 61, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 62, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 63, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 64, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 65, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 66, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 67, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 68, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 69, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 70, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 71, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 72, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 73, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 74, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 75, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 76, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 77, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 78, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 79, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 80, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 81, 'nome' => 'Teste1', 'ordem' => 0], 
            ['id' => 82, 'nome' => 'Teste1', 'ordem' => 0], ##NOVACATEGORIATRANSACAO##
        ];

        foreach ($categorias as $categoria) {
            CategoriaTransacao::create($categoria);
        }
    }
}
