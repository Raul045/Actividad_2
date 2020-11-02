<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->word,
        'contenido' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'producto_id' => $faker->all()->random()->id,
        'usuario_id' => $faker->all()->random()->id,
    ];
});
