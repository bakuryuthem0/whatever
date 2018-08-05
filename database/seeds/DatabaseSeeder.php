<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(TableAnswerSeeder::class);
        $this->call(TableBussinesSeeder::class);
        $this->call(TableBussinesImageSeeder::class);
        $this->call(TableQuestionSeeder::class);
        $this->call(TableUserSeeder::class);
    }
}
