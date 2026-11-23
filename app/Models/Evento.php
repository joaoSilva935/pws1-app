<?php

namespace App\Models;

// o Fillable permite que o model seja preenchido em massa, ou seja, que passa ser criado ou atualizado com um array de dados.
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

// o Fillable permite que o model seja preenchido em massa, ou seja, que passa ser criado ou atualizado com um array de dados.
// use Illuminate\Database\Eloquent\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['titulo', 'tipo_id', 'data', 'local', 'descricao', 'vagas', 'inscritos'])]
class Evento extends Model
{
    protected function casts(): array
    {
        return ['data' => 'date'];
    }
    public function tipo(): BelongsTo 
    {
        return $this->belongsTo(Tipo::class);
    }
}
