<?php

namespace App\Providers;

use App\Model\Solutions;

class SolutionsProvider {
	public static function get($id) {
		$solution = Solutions::find($id);
		return $solutions;
	}
	public static function create($title, $problem_id) {
		foreach($title as $key => $value) {
			$solution = new Solutions;
			$solution->title = $value;
			if($solution->save()) {
				$solution->problems()->attach($problem_id);
			}
		}
		return true;
	}
}