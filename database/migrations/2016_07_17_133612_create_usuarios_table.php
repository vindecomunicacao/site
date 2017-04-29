<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_usuario_id')->unsigned();
            $table->string('nome');
            $table->string('slug')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf', 20)->nullable();

            //Adicionado por LuisPortugal em 27/04/2017
            $table->integer('celula_id')->nullable()->unsigned();
            $table->date('dataNascimento');
            $table->string('celular', 15);
            $table->string('celularWhatsapp', 15)->nullable();
            $table->char('estadoCivil', 1)->nullable();
            $table->integer('numeroFilhos')->nullable();
            $table->char('rendaFamiliar', 1)->nullable();
            $table->string('endereco');
            $table->string('numeroEndereco');
            $table->string('cepEndereco', 9);
            $table->string('bairroEndereco');
            $table->string('cidadeEndereco');
            $table->string('ufEndereco', 2);
            $table->char('escolaridade', 1)->nullable();
            $table->string('cursoEscolaridade')->nullable();
            $table->string('profissao')->nullable();
            $table->char('carro', 1)->nullable();
            $table->char('casaPropria', 1)->nullable();
            $table->char('moraPais', 1)->nullable();
            $table->char('desempregado', 1)->nullable();
            $table->integer('anosDesempregado')->nullable();
            $table->char('planoSaude', 1)->nullable();
            $table->char('doadorSangue', 1)->nullable();
            $table->string('tipoSanguineo', 3)->nullable();
            $table->char('atendimentoEspecial', 1)->nullable();
            $table->text('descrisaoAtendimentoEspecial')->nullable();
            $table->char('remedioControlado', 1)->nullable();
            $table->text('descrisaoRemedioControlado')->nullable();
            $table->char('gruposWhatsapp', 1)->nullable();
            $table->string('necessidadeBasica')->nullable();
            $table->date('dataBatismo')->nullable();
            $table->char('saiuOutraIgreja', 1)->nullable();
            $table->text('descrisaoSaiuOutraIgreja')->nullable();
            $table->char('filantropico', 1)->nullable();
            $table->string('grupoFilantropico')->nullable();
            $table->char('dizimista', 1)->nullable();
            $table->char('encontroComDeus', 1)->nullable();
            $table->char('escolaDiscipulos', 1)->nullable();
            $table->text('descrisaoEscolaDiscipulos')->nullable();
            $table->char('conheceMinisteriosPaulo', 1)->nullable();
            $table->char('papelCorpoCristo', 1)->nullable();
            $table->char('cristaoComPolitica', 1)->nullable();
            $table->text('descrisaoCristaoComPolitica')->nullable();
            $table->text('papelIgrejaSociedade')->nullable();
            $table->char('formacaoProfissionalParteChamado', 1)->nullable();
            $table->char('formacaoAcademicaAliadoChamado', 1)->nullable();
            $table->char('estouDispostoServirComMeuTalento', 1)->nullable();
            $table->char('vontadeServirEmDepartamento', 1)->nullable();
            $table->text('descrisaoVontadeServirEmDepartamento')->nullable();
            $table->char('tocaInstrumentos', 1)->nullable();
            $table->text('descrisaoTocaInstrumentos')->nullable();
            $table->text('propositoDeVidaNaTerra')->nullable();
            $table->text('propositoMinisterial')->nullable();
            $table->text('motivacaoParaFazerOQueJaFaz')->nullable();
            $table->text('atividadesPreferidasParaTempoLivre')->nullable();
            $table->text('jesusParaVoce')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grupo_usuario_id')->references('id')->on('grupo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios', function (Blueprint $table) {
            $table->dropForeign('grupo_usuario_id');
        });
    }
}
