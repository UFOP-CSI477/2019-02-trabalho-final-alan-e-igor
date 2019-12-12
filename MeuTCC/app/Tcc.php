<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tcc extends Model
{
    protected $fillable = [
        'titulo', 'area', 'ano', 'semestre', 'aluno_id', 'professor_id','arquivo',
    ];
}
