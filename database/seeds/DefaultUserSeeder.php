<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'email' => 'admin',
    		'password' => bcrypt('root_corpozulia'),
    		'name' => 'Admin del sistema',
    		'imagen' => 'default.png'
    	]); 
    }
}
