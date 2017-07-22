<?php

use Illuminate\Database\Seeder;
use App\Models\Estado;

class seeder_estados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Estado::create([
        	'nombre_estado' =>'ACTIVO'
        ]);
    }
}
