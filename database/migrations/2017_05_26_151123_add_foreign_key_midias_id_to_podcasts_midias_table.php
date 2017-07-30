<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyMidiasIdToPodcastsMidiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('podcasts_midias', function (Blueprint $table) {
            $table->foreign("midias_id")->references("id")->on("midias");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('podcasts_midias', function (Blueprint $table) {
            $table->dropForeign("midias_id");
        });
    }
}
