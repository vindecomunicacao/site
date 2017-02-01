<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pastor_id')->unsigned()->nullable();
            $table->integer('supervisor_id')->unsigned()->nullable();
            $table->integer('discipulador_id')->unsigned()->nullable();
            $table->string('nome', 100);
            $table->string('imagem')->nullable();
            $table->tinyInteger('ativo')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pastor_id')->references('id')->on('usuarios');
            $table->foreign('supervisor_id')->references('id')->on('usuarios');
            $table->foreign('discipulador_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('redes', function (Blueprint $table) {
            $table->dropForeign('pastor_id');
            $table->dropForeign('supervisor_id');
            $table->dropForeign('lider_id');
        });
    }
}
