<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentMethod;
use Faker\Generator as Faker;

$factory->define(PaymentMethod::class, function (Faker $faker) {
    $idUser = App\User::pluck('id')->toArray();
    return [
        'TipoDePago' => $faker->randomElement($array = array('Tarjeta de credito', 'paypal')),
        'IDUsuario' => $faker->randomElement($idUser),
        //
    ];
});
