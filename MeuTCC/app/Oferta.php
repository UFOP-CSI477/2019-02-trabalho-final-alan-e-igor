<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'area', 'descricao', 'professor_id',
    ];

    // Subject -> Request (1:N)
    public function professor(){
        return $this->belongsTo('App\User');
    }
}
