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
	public static function create($title,$type) {
		$cat = new Category;
		$cat->title = $title;
		$cat->type = $type;
		if($cat->save()) {
			return $cat->id;
		}
	}
}