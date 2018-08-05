<?php

use Illuminate\Database\Seeder;

class TableQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
        	[
        		'id'		=> 1,
	        	'pregunta'	=> 'Que te gustaria',
				'solucion'	=> '0',
        	],
        	[
        		'id'		=> 2,
        		'pregunta'  => 'Frio o caliente',
        		'solucion'  => 0
        	],
        	[
        		'id'		=> 3,
        		'pregunta'  => 'Helado, yogurt o tortas frias',
        		'solucion'  => 0
        	],
        	[
        		'id'		=> 4,
        		'pregunta'  => 'Tortas, cupcakes o donas',
        		'solucion'	=> 0
        	],
        	[
        		'id'		=> 5,
        		'pregunta'  => 'Carne, vegetariano o mixto',
        		'solucion'  => 0
        	],
        	[
        		'id'		=> 6,
        		'pregunta'	=> 'Pescado, pollo, cerdo o comida rapida',
        		'solucion'  => 0
        	],
        	[
        		'id'		=> 7,
        		'pegunta'   => 'Vegano o vegetariano',
        		'solucion'	=> 0
        	],
        	[
        		'id'		=> 8,
        		'pregunta'  => 'Comida rapida o restaurant',
        		'solucion'  => 0
        	],
        	[
        		'id'		=> 9,
        		'pregunta'	=> 'Helado',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 10,
        		'pregunta'	=> 'Yogurt',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 11,
        		'pregunta'	=> 'Tortas frias',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 12,
        		'pregunta'	=> 'Tortas',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 13,
        		'pregunta'	=> 'Cupcakes',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 15,
        		'pregunta'	=> 'Donas',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 16,
        		'pregunta'	=> 'Pescado',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 17,
        		'pregunta'	=> 'Pollo',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 18,
        		'pregunta'	=> 'Cerdo',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 19,
        		'pregunta'	=> 'comida rapida',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 20,
        		'pregunta'	=> 'Vegano',
        		'solucion'	=> 1 
        	],
        	[
        		'id'		=> 21,
        		'pregunta'	=> 'Vegetariano',
        		'solucion'	=> 1 
        	],
        	[
        		'id'		=> 22,
        		'pregunta'	=> 'Comdda rapida',
        		'solucion'	=> 1 
        	],
        	[
        		'id'		=> 23,
        		'pregunta'	=> 'Restaurant',
        		'solucion'	=> 1 
        	],
        ]);
    }
}
