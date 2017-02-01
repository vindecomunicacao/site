<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['nome', 'texto', 'imagem', 'data', 'permanente', 'ativo'];

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
