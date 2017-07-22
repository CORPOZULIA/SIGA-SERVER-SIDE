<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Grupo;
class seeder_grupos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array=['Oficina','Agricolas','Pecuarios','Industriales','Limpieza','Papeleria','Medicos','Ferreteria'];

        $faker = Faker::create();
		for ($i=0; $i <= 7; $i++) {
    		\DB::table('v_2.grupos')->insert(array(
           'nombre_grupo' => $array[$i],
           'codigo_grupo' => $i,
           'estado_grupo'  => $faker->randomElement(['1','2']),
           'spg_cuenta' => $faker->randomElement(['404010101','404010102','404010103']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    ));
}
    }
}
