<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    $idMetodo = App\PaymentMethod::pluck('id')->toArray();
    $idOrder = App\Order::pluck('id')->toArray();
    return [
        'Estado' => $faker->randomElement($array = array('Pagado', 'No pagado')),
        'Monto' => $faker->numberBetween($min = 100, $max = 1000),
        'Cuotas' => $faker->numberBetween($min = 0, $max = 12),

        'IDFormaDePago' => $faker->randomElement($idMetodo),
        'IDOrden' => $faker->randomElement($idOrder),
        //
    ];
});
