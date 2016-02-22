<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function ($faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//        'password' => str_random(10),
//        'remember_token' => str_random(10),
//    ];
//});


$factory->define(\App\Entities\Pessoa::class, function ($faker) {
    return [
        'nome' => $faker->name,
        'apelido' => $faker->firstname,
        'sexo' => $faker->randomElement(['F', 'M'])
    ];
});

$factory->define(\App\Entities\Telefone::class, function ($faker){
    return [
        'descricao' => $faker->randomElement(['comercial', 'residencial', 'celular']),
        'codpais' => $faker->optional(0.7, 55)->numberBetween(1, 197),
        'ddd' => $faker->numberBetween(11, 92),
        'prefixo' => $faker->randomNumber(4),
        'sufixo' => $faker->randomNumber(4),
        'pessoa_id' => $faker->numberBetween(1,30)
    ];
});

$factory->define(\App\Entities\Email::class, function ($faker){
    return [
        'email' => $faker->email,
        'pessoa_id' => $faker->numberBetween(1,30)
    ];
});