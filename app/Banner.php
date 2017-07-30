<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['nome', 'imagem', 'texto', 'posicao', 'ordem', 'ativo'];
    protected $appends = ['getPosicao'];

    public function getGetPosicaoAttribute()
    {
        switch ($this->posicao) {
            case 1:
                return 'Lado Esquerdo';
                break;

            case 3:
                return 'Centro';
                break;

            case 5:
                return 'Lado Direito';
                break;
        }
    }
}
