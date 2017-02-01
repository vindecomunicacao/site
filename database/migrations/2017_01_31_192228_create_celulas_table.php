<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celulas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rede_id')->unsigned();
            $table->integer('lider_id')->unsigned();
            $table->string('nome', 100);
            $table->string('imagem')->nullable();
            $table->string('texto')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep',20)->nullable();
            $table->string('celular')->nullable();
            $table->tinyInteger('qtd_nucleo');
            $table->tinyInteger('ativo')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('rede_id')->references('id')->on('redes');
            $table->foreign('lider_id')->references('id')->on('usuarios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('celulas', function(Blueprint $table) {
            $table->dropForeign('rede_id');
            $table->dropForeign('lider_id');
        });
    }
}
