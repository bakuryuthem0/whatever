<?php

namespace App\Providers;

use App\Model\Solutions;

class SolutionsProvider {
	public static function get($id) {
		$solution = Solutions::find($id);
		return $solutions;
	}
	public static function create($data) {
		$solution = new Solutions;
		$solution->title = $data;
		if($solution->save()) {
			return true;
		}
	}
	public static function linkProblem($problem_id) {
		$solution = new Solutions;
		$solution->problem()->attach($problem_id);
		return true;
	}
}