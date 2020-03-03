<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inmueble;
use App\TipoInmueble;
use Faker\Generator as Faker;

$factory->define(Inmueble::class, function (Faker $faker) {
    
    $elemtos=['publico','vivienda','oficina','deportivo'];
    
    return [
        'nombre'=> $faker->company,
        'tipo_immueble_id'=> TipoInmueble::all()->random()->_id
    ];
});
