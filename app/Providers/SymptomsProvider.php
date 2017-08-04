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
	public static function create($data) {
		$var = new Symptoms;
		$var->title = $data['title'];
		$var->type= $data['type'];
		if($var->save()) {
			return true;
		}
	}
	public static function linkProbelms($problem_id) {
		$var = new Symptoms;
		$var->problem()->attach($problem_id);
		return true;
	}
}
