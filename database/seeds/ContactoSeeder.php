<?php

use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'nombre' => 'Diego',
            'correo' => 'diego1946@gmail.com',
            'telefono' => 76362384,
            'mensaje' => 'esta es una prueba para el proyecto del covid19',
        ]);
    }
}
