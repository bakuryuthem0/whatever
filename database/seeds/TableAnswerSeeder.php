<?php

use Illuminate\Database\Seeder;

class TableAnswerSeeder extends Seeder
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
        		'respuesta'		=> 'Dulce',
				'pregunta'		=> '1',
				'siguiente'		=> '2'
        	],
        	[
        		'respuesta'		=> 'Salado',
				'pregunta'		=> '1',
				'siguiente'		=> '5'
        	],
        	[
        		'respuesta'		=> 'Frio',
				'pregunta'		=> '2',
				'siguiente'		=> '3'
        	],
        	[
        		'respuesta'		=> 'Caliente',
				'pregunta'		=> '2',
				'siguiente'		=> '4'
        	],
        	[
        		'respuesta'		=> 'Helado',
        		'pregunta'		=> '3',
        		'siguiente'		=> '9'	
        	],
        	[
        		'respuesta'		=> 'yogurt',
        		'pregunta'		=> '3',
        		'siguiente'		=> '10'
        	],
        	[
        		'respuesta'		=> 'tortas frias',
        		'pregunta'		=> '3',
        		'siguiente'		=> '11'
        	],
        	[
        		'respuesta'		=> 'Tortas',
        		'pregunta'		=> '4',
        		'siguiente'		=> '9'	
        	],
        	[
        		'respuesta'		=> 'cupcakes',
        		'pregunta'		=> '4',
        		'siguiente'		=> '10'
        	],
        	[
        		'respuesta'		=> 'donas',
        		'pregunta'		=> '4',
        		'siguiente'		=> '11'
        	],
        	[
        		'respuesta'		=> 'Carne',
				'pregunta'		=> '5',
				'siguiente'		=> '90'
        	],
        	[
        		'respuesta'		=> 'Vegetariano',
				'pregunta'		=> '5',
				'siguiente'		=> '6'
        	],
        	[
        		'respuesta'		=> 'Mixto',
				'pregunta'		=> '5',
				'siguiente'		=> '7'
        	],
        	[

        	]
        ]);
    }
}
