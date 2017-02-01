<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
    protected $fillable = ['pastor_id', 'supervisor_id', 'discipulador_id', 'lider_id', 'nome'];
}
