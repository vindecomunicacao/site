<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\AuditingTrait;

class GrupoUsuario extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'nome', 'texto'];

    public function permissao()
    {
        return $this->belongsToMany(Transacao::class, 'permissao', 'grupo_usuario_id', 'transacao_id');
    }
}
