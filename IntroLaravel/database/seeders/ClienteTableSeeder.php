<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Ivan',
                'apellido'=>'Guerra',
                'correo'=>'iiguerra@gmail.com',
                'telefono'=>'4422113366'
            ],[
                'nombre'=>'Alberto',
                'apellido'=>'Gomez',
                'correo'=>'agomez@gmail.com',
                'telefono'=>'4422447755'
            ],[
                'nombre'=>'Juan Luis',
                'apellido'=>'Mosqueda',
                'correo'=>'Lmosqueda@gmail.com',
                'telefono'=>'4488556699'
            ]]);
    }
}
