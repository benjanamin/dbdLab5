<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RolPermission;
use Faker\Generator as Faker;

$factory->define(RolPermission::class, function (Faker $faker) {
    $idRol = App\Rol::pluck('id')->toArray();
    $idPermission = App\Permission::pluck('id')->toArray();
    return [
        'IDROL' => $faker->randomElement($idRol),
        'IDPERMISSION' => $faker->randomElement($idPermission),
        //
    ];
});
