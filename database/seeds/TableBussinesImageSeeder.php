<?php

use Illuminate\Database\Seeder;

class TableBussinesImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 10; $i++) {
	        DB::table('bussines_images')->insert([
	        	'bussines_id'	=> $i,
	        	'image'			=> 'http://lorempixel.com/400/400'
	        ]);
        }
    }
}
