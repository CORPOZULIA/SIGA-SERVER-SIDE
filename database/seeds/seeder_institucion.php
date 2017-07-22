<?php

use Illuminate\Database\Seeder;
use App\Models\Institucion;

class seeder_institucion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Institucion::create([
        	'nombre_institucion' => 'CORPOZULIA',
        	'codigo_institucion' => '0001'
        ]);
    }
}
