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
}
