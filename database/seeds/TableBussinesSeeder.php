<?php

use Illuminate\Database\Seeder;

class TableBussinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bussines')->insert([
        	[
				'name'			=> 'Gato cafe',
				'description'	=> 'Local que ofrece postres, sandwiches y cafe con gatos',
				'reputation'	=> rand(0,100),
        	],
        	[
        		'name'			=> 'La cafebreria',
        		'description'	=> 'Venden tortas, cafe y desayunos',
        		'reputation'	=> rand(0,100)
        	],
        	[
        		'name'			=> 'Chicha inmaculada',
        		'description'	=> 'Venden chicha',
        		'reputation'	=> rand(0, 100)
        	],
        	[
        		'name'			=> 'Torigallo',
        		'description'	=> 'Venta de pollo y carnes',
        		'reputation'	=> rand(0, 100)
        	],
        	[
        		'name'			=> 'McDonalds',
        		'description'	=> 'Venta de hamburguesas',
        		'reputation'	=> rand(0, 100)
        	],
        	[
        		'name'			=> 'Pizza mia',
        		'description'	=> 'Venden pizza',
        		'reputation'	=> rand(0, 100)
        	],
        	[
        		'name'			=> 'Heladeria twister',
        		'description'	=> 'Venden helados, tortas y licor',
        		'reputation'	=> rand(0, 100)
        	],
        	[
        		'name'			=> 'don veggie',
        		'description'	=> 'Venden  comida vegetariana',
        		'reputation'	=> rand(0, 100)

        	],
        	[
        		'name'			=> 'Suchi y cebiches',
        		'description'	=> 'Venden sushi y cebiche',
        		'reputation'	=> rand(0, 100)

        	],
        	[
        		'name'			=> 'Pescaderia choroni',
        		'description'	=> 'Venden pescado',
        		'reputation'	=> rand(0, 100)
        	]
     	]);   
    }
}
