<?php

namespace App\Providers;

use App\Model\Category;

class CategoryProvider {
	public static function get($id) {
		return Category::find($id);
	}
	public static function getByType($type) {
		return Category::where("type",$type)->get();
	}
	public static function create($data) {
		$cat = new Category;
		$cat->title = $data;
		if($cat->save()) {
			return true;
		}
	}
	public static function linkProblem($problem_id) {
		$cat = new Category;
		$cat->problem()->attach($problem_id);
		return true;
	}
}