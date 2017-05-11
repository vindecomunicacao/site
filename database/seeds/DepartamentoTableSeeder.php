<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach([
            'Infantil',
            'Louvor',
            'Diaconato',
            'Tecnologia',
            'Comunicação',
            'Teatro',
            'Dança',
            'Oração e Intercessao',
        ] as $departamento)
            Departamento::create(
                ['departamento' => $departamento]
            );
    }
}
