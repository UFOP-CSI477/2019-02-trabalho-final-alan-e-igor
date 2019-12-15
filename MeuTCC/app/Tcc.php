<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tcc extends Model
{
    protected $fillable = [
        'titulo', 'area', 'ano', 'semestre', 'link', 'aluno_id', 'professor_id','arquivo',
    ];

     
    // Subject -> Request (1:N)
    public function aluno(){
        return $this->belongsTo('App\User');
    }

     
    // Subject -> Request (1:N)
    public function professor(){
        return $this->belongsTo('App\User');
    }
}
