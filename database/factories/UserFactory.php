<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    return [
        'RUT' => $faker->numerify('########-#'),
        'nombre'=> $faker->name,
        'email' =>  $faker->email,
        'password'=> $faker->word, 
        'direccion' => $faker->address,
        'telefono' => $faker->numerify('+56 9 #### ####'),
        'fechaDeNacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'IDROL' => $faker->randomElement($idRol),
        //
    ];
});
