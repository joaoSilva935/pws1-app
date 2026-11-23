<?php

namespace App\Models;

// o Fillable permite que o model seja preenchido em massa, ou seja, que passa ser criado ou atualizado com um array de dados.
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

// o Fillable permite que o model seja preenchido em massa, ou seja, que passa ser criado ou atualizado com um array de dados.
// use Illuminate\Database\Eloquent\Fillable;

#[Fillable(['titulo', 'tipo_id', 'data', 'local', 'descricao', 'vagas', 'inscritos'])]
class Evento extends Model
{
    protected function casts(): array
    {
        return ['data' => 'date'];
    }
}
