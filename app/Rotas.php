<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\AuditingTrait;

class Rotas extends Model
{
    use SoftDeletes;

    public function grupo_usuarios()
    {
        return $this->belongsToMany(GrupoUsuario::class, 'permissao', 'rota_id', 'grupo_usuario_id')->withTimestamps();
    }
}
