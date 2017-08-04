<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Symptoms;
use App\Model\Problems;
use App\Model\Solutions;
use App\Providers\CategoryProvider;
use App\Providers\SymptomsProvider;
use App\Providers\ProblemsProvider;
use App\Providers\SolutionsProvider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
    {
        return view('index');
    }
    public function getCategory($type) {
    	$category = CategoryProvider::getByType($type);
    	if($category)
    	{
	    	return json_encode([
	            'status'	=> 	'success',
	            'data' 		=>	$category->toArray(),
	            'message'	=>	'Category Found'
	          ]);
	    }
	    else {
	    	return json_encode([
	            'status'	=>	'error',
	            'message'	=>	'No category found for the section'
	          ]);
	    }
    }
    public function getSymptoms($category) {
    	$symptoms = SymptomsProvider::getByCategory($category);
    	if($symptoms)
    	{
	    	return json_encode([
	            'status'	=> 	'success',
	            'data' 		=>	$symptoms->toArray(),
	            'message'	=>	'Possible symptoms found'
	          ]);
	    }
	    else {
	    	return json_encode([
	            'status'	=>	'error',
	            'message'	=>	'No possible symptom found'
	          ]);
	    }
    }
    public function getProblems(Request $request) {
    	$problem = SymptomsProvider::getProblems($request->symptoms);
    	if($problem)
    	{
	    	return json_encode([
	            'status'	=> 	'success',
	            'data' 		=>	$problem->toArray(),
	            'message'	=>	'Possible problem found'
	          ]);
	    }
	    else {
	    	return json_encode([
	            'status'	=>	'error',
	            'message'	=>	'No possible problem found'
	          ]);
	    }
    }
    public function getSolutions($problem) {
    	$solution = ProblemsProvider::getSolutions($problem);
    	if($solution)
    	{
	    	return json_encode([
	            'status'	=> 	'success',
	            'data' 		=>	$solution->toArray(),
	            'message'	=>	'Possible solution found'
	          ]);
	    }
	    else {
	    	return json_encode([
	            'status'	=>	'error',
	            'message'	=>	'No possible solution found'
	          ]);
	    }
    }
}
