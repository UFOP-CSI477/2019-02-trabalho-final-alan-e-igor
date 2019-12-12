<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Tcc;
use App\User;

$factory->define(Tcc::class, function (Faker $faker) {
    $area = ['comp', 'ele', 'sjm', 'pro'];
    $tipo = ['aluno', 'professor'];
    $professor = User::where('tipo','professor')->get();
    $alunos = User::where('tipo','aluno')->get();
    
    return [
        'titulo' => $faker->name,
        'aluno_id' => $faker->randomElement($alunos),
        'professor_id' =>$faker->randomElement($professor),
        'titulo' =>$faker->title,
        'area' => $faker->randomElement($area),
        'ano' => $faker->randomNumber(2018, 2020),
        'semestre' =>$faker->numberBetween(1,2), // password
        'arquivo' =>$faker->name,
    ];
});
