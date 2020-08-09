<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->randomElement($array = array('Editar', 'Agregar', 'Eliminar')),
        'Descripcion' => $faker->randomElement($array = array('Editar', 'Agregar', 'Eliminar')),
        //
    ];
});
