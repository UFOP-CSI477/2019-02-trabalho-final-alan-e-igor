<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Oferta;
use App\User;
use Faker\Generator as Faker;

$factory->define(Oferta::class, function (Faker $faker) {
    $area = ['Engenharia de Computação','Engenharia de Produção', 'Engenharia Elétrica', 'Sistemas de Informação'];
    $professor = User::where('tipo','professor')->get();
    
    return [
        'titulo' => $faker->realText(10),
        'area'=> $faker->randomElement($area),
        'descricao' => $faker->realText(180),
        'professor_id' =>$faker->randomElement($professor),
    ];
});
