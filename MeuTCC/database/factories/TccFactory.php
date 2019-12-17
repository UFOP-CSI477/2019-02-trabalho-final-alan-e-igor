<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Tcc;
use App\User;

$factory->define(Tcc::class, function (Faker $faker) {
    $area = ['Engenharia de Computação','Engenharia de Produção', 'Engenharia Elétrica', 'Sistemas de Informação'];
    $tipo = ['aluno', 'professor'];
    $professor = User::where('tipo','professor')->get();
    $alunos = User::where('tipo','aluno')->get();
    
    return [
        'titulo' =>$faker->title,
        'aluno_id' => $faker->randomElement($alunos),
        'professor_id' =>$faker->randomElement($professor),
        'area' => $faker->randomElement($area),
        'ano' => $faker->numberBetween(2018, 2020),
        'semestre' =>$faker->numberBetween(1,2), // password
        'link' =>$faker->link,
    ];
});
