<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progresso extends Model
{
    protected $fillable = [
        'descricao', 'mensagem', 'tcc_id',
    ];

    // Subject -> Request (1:N)
    public function professor(){
        return $this->belongsTo('App\Tcc');
    }
}
