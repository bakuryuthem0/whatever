<?php

use Illuminate\Database\Seeder;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'email'	=> 'test@subject.com',
        	'password' => bcrypt('secret')
        ]);
    }
}
