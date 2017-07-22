<?php

use Illuminate\Database\Seeder;
use App\Models\Filial;
use Faker\Factory as Faker;

class seeder_filiales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$array_filiales = ['CORPOZULIA','BIBLIOTECA CORPOZULIA','PROYECTO LABERINTO CORPOZULIA','PROYECTO MINERO CORPOZULIA','MEJORAMIENTO GANADERIA MENOS EN LA GUAJIRA','CIA.CERRADA','CIA.CERRADA','PROYECTO SUELOS ACIDOS FINCA TRES DE ORO','FINCAS','FINCA JAGUEY ROJO','FINCA ANTONIO NICOLAS BRICEÑO'];
    	$array_codigo = ['01','02','03','04','05','06','07','08','10','11','12'];

    	        $faker = Faker::create();
		for ($i=0; $i <= 10; $i++) {
    		\DB::table('v_2.filiales')->insert(array(
           'nombre_filial' => $array_filiales[$i],
           'codigo_filial' => $array_codigo[$i],
           'institucion_id' => '1',
           'estado_id'  => '1',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
		}

    }
}
