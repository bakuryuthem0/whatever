<?php

use Illuminate\Database\Seeder;

class TableBussinesAnswerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rand = rand(0,5);
        for($i = 1; $i <= 10; $i++) {
            for($j = 0; $j < $rand; $j++) {
    	        DB::table('answer_bussines')->insert([
            		'bussines_id'	=> $i,
            		'answer_id'		=> rand(0, 21)
    	       	]);
            }
        }
    }
}
