<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PodcastMidia extends Model
{
    protected $table = 'podcasts_midias';

    protected $fillable = ['*'];

    public function podcast(){
        return $this->belongsTo(Podcast::class, 'id', 'podcasts_id');
    }

    public function midia(){
        return $this->belongsTo(Midia::class, 'id', 'midias_id');
    }
}
