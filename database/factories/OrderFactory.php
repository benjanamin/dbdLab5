<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $idAnuncio = App\Advertisement::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    return [
        'Estado' => $faker->randomElement($array = array('Entregado', 'En camino', 'Perdido')),
        'Cantidad' => $faker->numberBetween($min = 1, $max = 50),
        'IDUsuario' => $faker->randomElement($idUser),
        'IDAnuncio' => $faker->randomElement($idAnuncio),
        //
    ];
});
