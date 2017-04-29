<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celula extends Model
{
    protected $fillable = ['rede_id', 'lider_id', 'nome'];

    public function rede()
    {
        return $this->belongsTo(Rede::class, 'rede_id');
    }

    public function lider()
    {
        return $this->belongsTo(Usuario::class, 'lider_id');
    }
}
