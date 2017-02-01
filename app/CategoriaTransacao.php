<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\AuditingTrait;

class CategoriaTransacao extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'ordem'];

    public function transacao()
    {
        return $this->hasMany(Transacao::class, 'categoria_id');
    }
}
