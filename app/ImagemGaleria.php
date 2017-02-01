<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemGaleria extends Model
{
    protected $fillable = ['galeria_id', 'nome', 'legenda', 'capa'];
}
