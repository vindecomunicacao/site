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

            //Adicionado por LuisPortugal em 27/04/2017
            $table->integer('celula_id')->nullable()->unsigned();
            $table->date('dataNascimento');
            $table->string('celular', 15);
            $table->string('celularWhatsapp', 15)->nullable();
            $table->char('estadoCivil', 1)->nullable()->comment('1: Solteiro (a); 2: Casado (a); 3: Divorciado (a);');
            $table->integer('numeroFilhos')->nullable();
            $table->string('endereco');
            $table->string('numeroEndereco');
            $table->string('cepEndereco', 9);
            $table->string('bairroEndereco');
            $table->string('cidadeEndereco');
            $table->string('ufEndereco', 2);
            $table->char('escolaridade', 1)->nullable()->comment('1: Ensino Fundamental; 2: Ensino Médio; 3: Ensino Profissionalizante; 4: Ensino Superior Incompleto; 5: Ensino Superior Completo; 6: Especialização; 7: Graduação; 8: Mestrado; 9: Doutorado;');
            $table->string('cursoEscolaridade')->nullable();
            $table->string('profissao')->nullable();
            $table->char('desempregado', 1)->nullable();
            $table->integer('anosDesempregado')->nullable();
            $table->char('doadorSangue', 1)->nullable();
            $table->char('tipoSanguineo', 1)->nullable()->comment('1: A +; 2: A -; 3: B +; 4: B -; 5: AB +; 6: AB -; 7: O +; 8: O -;');
            $table->char('atendimentoEspecial', 1)->nullable();
            $table->text('descrisaoAtendimentoEspecial')->nullable();
            $table->char('remedioControlado', 1)->nullable();
            $table->text('descrisaoRemedioControlado')->nullable();
            $table->char('saiuOutraIgreja', 1)->nullable();
            $table->text('descrisaoSaiuOutraIgreja')->nullable();
            $table->char('filantropico', 1)->nullable();
            $table->string('grupoFilantropico')->nullable();
            $table->char('dizimista', 1)->nullable();
            $table->char('encontroComDeus', 1)->nullable();
            $table->char('escolaDiscipulos', 1)->nullable()->comment('1: Sim, estou cursando; 2: Não curso; 3: Já sou formado;');
            $table->text('descrisaoEscolaDiscipulos')->nullable();
            $table->char('conheceMinisteriosPaulo', 1)->nullable();
            $table->char('papelCorpoCristo', 1)->nullable()->comment('1: Profeta; 2: Mestre; 3: Apóstolo; 4: Evangelista; 5: Pastor; 6: Não Sei;');
            $table->char('cristaoComPolitica', 1)->nullable();
            $table->text('descrisaoCristaoComPolitica')->nullable();
            $table->char('formacaoProfissionalParteChamado', 1)->nullable();
            $table->char('formacaoAcademicaAliadoChamado', 1)->nullable();
            $table->char('estouDispostoServirComMeuTalento', 1)->nullable();
            $table->char('vontadeServirEmDepartamento', 1)->nullable();
            $table->integer('departamento_id')->nullable()->unsigned();
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
            $table->dropForeign('departamento_id');
            $table->dropForeign('celula_id');
        });
    }
}
