<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('TRUNCATE usuarios');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Usuario::create([
            'grupo_usuario_id' => 1,
            'nome' => 'Denny Augustus',
            'email' => 'dennysaug@gmail.com',
            'password' => bcrypt('root'),
            'cpf' => '986.152.972-15'
        ]);

        Usuario::create([
            'grupo_usuario_id' => 2,
            'nome' => 'Pastor',
            'email' => 'pastor@mail.com',
            'password' => bcrypt('jesus'),
            #'cpf' => '986.152.972-15'
        ]);

        Usuario::create([
            'grupo_usuario_id' => 3,
            'nome' => 'Supervisor',
            'email' => 'supervisor@mail.com',
            'password' => bcrypt('jesus'),
            #'cpf' => '986.152.972-15'
        ]);

        Usuario::create([
            'grupo_usuario_id' => 4,
            'nome' => 'Discipulador',
            'email' => 'discipulador@mail.com',
            'password' => bcrypt('jesus'),
            #'cpf' => '986.152.972-15'
        ]);

        Usuario::create([
            'grupo_usuario_id' => 5,
            'nome' => 'Líder',
            'email' => 'lider@mail.com',
            'password' => bcrypt('jesus'),
            #'cpf' => '986.152.972-15'
        ]);

    }
}
