<?php

use Illuminate\Database\Seeder;
use App\Models\Operacion;
use Faker\Factory as Faker;

class seeder_operaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_filiales = ['INCORPORACION','DESINCORPORACION','ASIGNACION DE ACTIVO','REASIGNACION DE ACTIVO','CIERRE MENSUAL','ACTUALIZACION DE ACTIVO'];
    	$array_codigo = ['IA','DA','AA','RA','CM','UA'];

    	        $faker = Faker::create();
		for ($i=0; $i <= 5; $i++) {
    		\DB::table('v_2.operaciones')->insert(array(
           'nombre_operacion' => $array_filiales[$i],
           'codigo_operacion' => $array_codigo[$i],
           'estado_operacion'  => '1',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
		}
    }
}
