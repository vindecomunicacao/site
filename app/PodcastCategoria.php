<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PodcastCategoria extends Model
{
    protected $fillable = ['*'];

    public function podcasts(){
        return $this->hasMany(Podcast::class, 'id', 'podcast_categoria_id');
    }
}
