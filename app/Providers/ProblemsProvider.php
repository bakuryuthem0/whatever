<?php

namespace App\Providers;

use App\Model\Problems;

class ProblemsProvider {
	public static function get($id) {
		$var = Problems::find($id);
		return $var;
	}
	public static function create($title) {
		$var = new Problems;
		$var->title = $title;
		if($var->save()) {
			return $var->id;
		}
		return false;
	}
	public static function getSolutions($id) {
		$var = Problems::find($id);
		return $var->solutions;
	}
	public static function linkSymptoms($id, $symptoms) {
		$var = Problems::find($id);
		dd($symptoms);
		foreach($symptoms as $key => $value) {
			if(!$var->symptoms()->attach($symptoms))
			{
				return false;
			}
		}
		return true;
	}
}
