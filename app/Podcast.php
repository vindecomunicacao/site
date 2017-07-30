<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Podcast extends Model
{
    use SoftDeletes;
    protected $fillable = ['id', 'titulo', 'subtitulo', 'descricao', 'link', 'imagem', 'autor_id', 'tags', 'arquivo', 'direitos_autorais'];

    public function autor(){
        return $this->belongsTo(Usuario::class, 'autor_id');
    }
}
