<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
    protected $fillable = ['pastor_id', 'supervisor_id', 'discipulador_id', 'lider_id', 'nome'];

    public function pastor()
    {
        return $this->belongsTo(Usuario::class, 'pastor_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Usuario::class, 'supervisor_id');
    }

    public function discipulador()
    {
        return $this->belongsTo(Usuario::class, 'discipulador_id');
    }
}
