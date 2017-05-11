<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table)
        {
            $table->dropColumn('gruposWhatsapp');
            $table->dropColumn('tocaInstrumentos');
            $table->dropColumn('descrisaoTocaInstrumentos');
            $table->dropColumn('rendaFamiliar');
            $table->dropColumn('cpf');
            $table->dropColumn('carro');
            $table->dropColumn('casaPropria');
            $table->dropColumn('moraPais');
            $table->dropColumn('planoSaude');
            $table->dropColumn('descrisaoVontadeServirEmDepartamento');

            //rename and change type of field
            $table->integer('departamento_id')->nullable()->unsigned()->after('vontadeServirEmDepartamento');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
