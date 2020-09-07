<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Advertisement;
use Faker\Generator as Faker;

$factory->define(Advertisement::class, function (Faker $faker) {
    
    $idCategoria = App\Category::pluck('id')->toArray();
    $idUser = App\User::pluck('id')->toArray();
    
 
    return [
        'Titulo' => $faker->unique()->numerify('Artículo N°####'),
        'Cantidad' => $faker->numberBetween($min = 0, $max = 10),
        'Descripcion' => $faker->text($maxNbChars = 200) ,
        'PrecioUnitario'=> $faker->numberBetween($min = 100, $max = 1000),
        'IDUsuario' => $faker->randomElement($idUser),
        'IDCategoria' => $faker->randomElement($idCategoria),
        //
    ];
});
