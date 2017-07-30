<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = ['nome', 'texto', 'imagem', 'data', 'ativo'];

    public function setDataAttribute($data)
    {
        if($data)
            $this->attributes['data'] = Carbon::createFromFormat('d/m/Y', $data)->format('Y-m-d');
    }

    public function getDataAttribute($data)
    {
        if($data)
            return Carbon::createFromFormat('Y-m-d', $data)->format('d/m/Y');
    }
}