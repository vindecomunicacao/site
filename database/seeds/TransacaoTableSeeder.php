<?php

use App\GrupoUsuario;
use App\Transacao;
use Illuminate\Database\Seeder;

class TransacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('TRUNCATE transacaos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        # GRUPO DE USUÁRIO
        Transacao::create([
            'categoria_id' => 1,
            'permissao' => 'grupo-usuario.visualizar',
            'label' => 'Visualizar'
        ]);
        Transacao::create([
            'categoria_id' => 1,
            'permissao' => 'grupo-usuario.cadastrar',
            'label' => 'Cadastrar'
        ]);
        Transacao::create([
            'categoria_id' => 1,
            'permissao' => 'grupo-usuario.alterar',
            'label' => 'Alterar'
        ]);
        Transacao::create([
            'categoria_id' => 1,
            'permissao' => 'grupo-usuario.excluir',
            'label' => 'Excluir'
        ]);

        # USUÁRIO
        Transacao::create([
            'categoria_id' => 2,
            'permissao' => 'usuario.visualizar',
            'label' => 'Visualizar'
        ]);
        Transacao::create([
            'categoria_id' => 2,
            'permissao' => 'usuario.cadastrar',
            'label' => 'Cadastrar'
        ]);
        Transacao::create([
            'categoria_id' => 2,
            'permissao' => 'usuario.alterar',
            'label' => 'Alterar'
        ]);
        Transacao::create([
            'categoria_id' => 2,
            'permissao' => 'usuario.excluir',
            'label' => 'Excluir'
        ]);

        # PERMISSÃO
        Transacao::create([
            'categoria_id' => 3,
            'permissao' => 'permissao.visualizar',
            'label' => 'Visualizar'
        ]);
        Transacao::create([
            'categoria_id' => 3,
            'permissao' => 'permissao.alterar',
            'label' => 'Alterar'
        ]);

        # Log
        Transacao::create([
            'categoria_id' => 4,
            'permissao' => 'log.visualizar',
            'label' => 'Visualizar'
        ]);

        # Cliente        
        Transacao::create([
            'categoria_id' => 14,
            'permissao' => 'cliente.visualizar',
            'label' => 'Visualizar'
        ]);
        
        Transacao::create([
            'categoria_id' => 14,
            'permissao' => 'cliente.cadastrar',
            'label' => 'Cadastrar'
        ]);
        
        Transacao::create([
            'categoria_id' => 14,
            'permissao' => 'cliente.alterar',
            'label' => 'Alterar'
        ]);
        
        Transacao::create([
            'categoria_id' => 14,
            'permissao' => 'cliente.excluir',
            'label' => 'Excluir'
        ]);
        # Podcast        
        Transacao::create([
            'categoria_id' => 15,
            'permissao' => 'podcast.visualizar',
            'label' => 'Visualizar'
        ]);
        
        Transacao::create([
            'categoria_id' => 15,
            'permissao' => 'podcast.cadastrar',
            'label' => 'Cadastrar'
        ]);
        
        Transacao::create([
            'categoria_id' => 15,
            'permissao' => 'podcast.alterar',
            'label' => 'Alterar'
        ]);
        
        Transacao::create([
            'categoria_id' => 15,
            'permissao' => 'podcast.excluir',
            'label' => 'Excluir'
        ]);
        # PodcastMidia        
        Transacao::create([
            'categoria_id' => 16,
            'permissao' => 'podcastmidia.visualizar',
            'label' => 'Visualizar'
        ]);
        
        Transacao::create([
            'categoria_id' => 16,
            'permissao' => 'podcastmidia.cadastrar',
            'label' => 'Cadastrar'
        ]);
        
        Transacao::create([
            'categoria_id' => 16,
            'permissao' => 'podcastmidia.alterar',
            'label' => 'Alterar'
        ]);
        
        Transacao::create([
            'categoria_id' => 16,
            'permissao' => 'podcastmidia.excluir',
            'label' => 'Excluir'
        ]);
        # PodcastCategoria        
        Transacao::create([
            'categoria_id' => 17,
            'permissao' => 'podcastcategoria.visualizar',
            'label' => 'Visualizar'
        ]);
        
        Transacao::create([
            'categoria_id' => 17,
            'permissao' => 'podcastcategoria.cadastrar',
            'label' => 'Cadastrar'
        ]);
        
        Transacao::create([
            'categoria_id' => 17,
            'permissao' => 'podcastcategoria.alterar',
            'label' => 'Alterar'
        ]);
        
        Transacao::create([
            'categoria_id' => 17,
            'permissao' => 'podcastcategoria.excluir',
            'label' => 'Excluir'
        ]);
        # Midia        
        Transacao::create([
            'categoria_id' => 18,
            'permissao' => 'midia.visualizar',
            'label' => 'Visualizar'
        ]);
        
        Transacao::create([
            'categoria_id' => 18,
            'permissao' => 'midia.cadastrar',
            'label' => 'Cadastrar'
        ]);
        
        Transacao::create([
            'categoria_id' => 18,
            'permissao' => 'midia.alterar',
            'label' => 'Alterar'
        ]);
        
        Transacao::create([
            'categoria_id' => 18,
            'permissao' => 'midia.excluir',
            'label' => 'Excluir'
        ]);
        ##NOVATRANSACAO##






        $transacoes = Transacao::select('id')->get()->lists('id')->toArray();
        GrupoUsuario::find(1)->permissao()->sync($transacoes);
    }
}
