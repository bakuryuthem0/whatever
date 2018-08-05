<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\Model\Bussines;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request)
    {
        if($request->has('id')) {
            $id = $request->input('id');
            $
        }else {
            $id = 1;
            $aid = -1;
        }

        $preguntas = Question::with('answers:respuesta,pregunta,siguiente')->find($id);
        $bussines  = Bussines::with('images')->whereHas('answers',function($answers) use($aid) {
            if($aid != -1) {
                $answers->where('answers_id', '=', $aid);
            }
        })->get();
        return view('index');
    }
}
