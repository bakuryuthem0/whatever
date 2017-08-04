<?php

namespace App\Providers;

use App\Model\Problems;

class ProblemsProvider {
	public static function get($id) {
		$var = Problems::find($id);
		return $var;
	}
	public static function create($data) {
		$var = new Problems;
		$var->title = $data;
		if($var->save()) {
			return true;
		}
	}
	public static function linkSolution($solution_id) {
		$var = new Problems;
		$var->problem()->attach($solution_id);
		return true;
	}
	public static function getSolutions($id) {
		$var = Problems::find($id);
		return $var->solutions;
	}
}
