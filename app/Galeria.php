<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = ['nome', 'rede_id', 'data', 'ativo'];

    public function imagens()
    {
        return $this->hasMany(ImagemGaleria::class);
    }

    public function setDataAttribute($data)
    {
        $this->attributes['data'] = Carbon::createFromFormat('d/m/Y', $data)->format('Y-m-d');
    }

    public function getDataAttribute($data)
    {
        return Carbon::createFromFormat('Y-m-d', $data)->format('d/m/Y');
    }
}
