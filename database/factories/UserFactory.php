<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    return [
        'RUT' => $faker->numberBetween($min = 100000000, $max = 900000000),
        'nombre'=> $faker->randomElement($array = array('Pepa', 'Pepe', 'Pepi','Pepo','Pepu')),
        'email' =>  $faker->email,
        'password'=> $faker->randomElement($array = array('Pepa', 'Pepe', 'Pepi','Pepo','Pepu')), 
        'direccion' => $faker->randomElement($array = array('Pepa', 'Pepe', 'Pepi','Pepo','Pepu')),
        'telefono' => $faker->randomElement($array = array('Pepa', 'Pepe', 'Pepi','Pepo','Pepu')),
        'fechaDeNacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'IDROL' => $faker->randomElement($idRol),
        //
    ];
});
