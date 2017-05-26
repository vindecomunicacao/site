<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    protected $fillable = ['*'];

    public function podcasts(){
        return $this->belongsToMany(Podcast::class, PodcastMidia::class, 'midias_id', 'podcasts_id');
    }
}
