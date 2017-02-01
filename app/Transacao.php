<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\AuditingTrait;

class Transacao extends Model
{
    use SoftDeletes;

    protected $fillable = ['categoria_id', 'permissao', 'label'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaTransacao::class, 'categoria_id');
    }
}
