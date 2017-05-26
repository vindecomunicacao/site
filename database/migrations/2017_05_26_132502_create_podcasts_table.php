<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->text('descricao');
            $table->string('link');
            $table->string('imagem')->nullable();
            $table->integer('autor')->unsigned();
            $table->integer('podcast_categoria_id')->unsigned();
            $table->string('linguagem')->nullable();
            $table->string('direitos_autorais')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('podcasts');
    }
}
