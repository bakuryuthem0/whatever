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
        DB::table('answers')->insert([
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
        	]
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
        		'pregunta'	=> 'yogurt',
        		'solucion'	=> 1
        	],
        	[
        		'id'		=> 11,
        		'pregunta'	=> 'tortas frias',
        		'solucion'	=> 1
        	],
        	[
        		id			=> 12,
        		'pregunta'	=> 'Tortas',
        		'siguiente'	=> 1
        	],
        	[
        		id			=> 13,
        		'pregunta'	=> 'cupcakes',
        		'siguiente'	=> 1
        	],
        	[
        		id			=> 15,
        		'pregunta'	=> 'donas',
        		'siguiente'	=> 1
        	],
        ]);
    }
}
