<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = ['*'];

    public function midias(){
        return $this->belongsToMany(Midia::class, PodcastMidia::class, 'podcasts_id', 'midias_id');
    }
    
    public function categoria(){
        return $this->belongsTo(PodcastCategoria::class, 'podcast_categoria_id', 'id');
    }
}
