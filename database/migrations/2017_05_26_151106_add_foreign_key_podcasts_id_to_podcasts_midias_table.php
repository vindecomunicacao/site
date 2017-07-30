<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPodcastsIdToPodcastsMidiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('podcasts_midias', function (Blueprint $table) {
            $table->foreign("podcasts_id")->references("id")->on("podcasts");
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
            $table->dropForeign("podcasts_id");
        });
    }
}
