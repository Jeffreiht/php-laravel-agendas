<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agenda;
use Faker\Generator as Faker;

$factory->define(Agenda::class, function (Faker $faker) {
    return [
        'name' => $this->faker->firstName('male'|'female'),
        'lastName' => $this->faker->lastName,
        'sexo' => rand(0,1),
        'telefono' => $this->faker->tollFreePhoneNumber,
        'email' => $this->faker->unique()->safeEmail,
        'estado_civil' => rand(0,1),
        'birthay' => $this->faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
