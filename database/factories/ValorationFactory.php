<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Valoration;
use Faker\Generator as Faker;

$factory->define(Valoration::class, function (Faker $faker) {
    $rutUser = App\User::pluck('RUT')->toArray();
    $idAdvertisement = App\Advertisement::pluck('id')->toArray();
    return [
        'Titulo' => $faker->randomElement($array = array('Terrible bacan', 'Terrible malo')),
        'Estrellas' => $faker->numberBetween($min = 0, $max = 5),
        'Comentario' => $faker->randomElement($array = array('Terrible bacan', 'Terrible malo')),
        'RUTUsuario' => $faker->randomElement($rutUser),
        'IDAnuncio' => $faker->randomElement($idAdvertisement),
    ];
});
