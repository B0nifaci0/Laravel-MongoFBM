<?php

use Illuminate\Database\Seeder;
use App\TipoInmueble as Tipo;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Tipo::create([
            'nombre'=>'vivienda'
        ]);
        Tipo::create([
            'nombre'=>'publico'
        ]);
        Tipo::create([
            'nombre'=>'oficina'
        ]);
        Tipo::create([
            'nombre'=>'deportivo'
        ]);

        factory(App\Inmueble::class,50)->create();
    }
}
