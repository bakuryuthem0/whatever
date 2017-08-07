<?php

namespace App\Providers;

use App\Model\Symptoms;
use App\Model\Problems;

class SymptomsProvider {
	public static function get($id) {
		$var = Symptoms::find($id);
		return $var;
	}
	public static function getByCategory($category) {
		return Symptoms::where("category_id",$category)->get();
	}
	public static function getProblems($symptoms) {
		$arrProblems = [];
		$problem_id = false;
		//go through each symptom and get all the problems it points to
		foreach($symptoms as $s) {
			$var = Symptoms::find($s);
			if($var->problems){
				//push all the problems onto an array
				foreach ($var->problems as $p) {
					array_push($arrProblems, $p->id);
				}
			}
		}
		//count how many times each problem occurs
		$problemsCount = array_count_values($arrProblems);
		//sort the array from least to most frequent
		asort($problemsCount);
		//get the most frequent in the array and then get it's key => problem_id
		$problem_id = array_search(end($problemsCount), $problemsCount);
		//return the problem
		return Problems::find($problem_id);
	}
	public static function create($title, $category_id, $problem_id) {
		// Loop through the title as it is an array of titles for new symptoms
		foreach($title as $key => $value) {
			$var = new Symptoms;
			$var->title = $value;
			$var->category_id= $category_id;
			if($var->save()) {
				$var->problems()->attach($problem_id);
			}
		}
		return true;
	}
}
