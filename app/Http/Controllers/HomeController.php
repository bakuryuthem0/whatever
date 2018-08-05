<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\Model\Bussines;
use App\Model\Answer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request, $id = null)
    {
        if(!is_null($id)) {
            $aid = Answer::where('siguiente','=', $id)->first()->id;
        }else {
            $id = 1;
            $aid = -1;
        }

        $preguntas = Question::with('answers:respuesta,pregunta,siguiente')->find($id);
        return $preguntas;
        $bussines  = Bussines::with('images')
        /*->whereHas('answers', function($answers) use($aid) {
            if($aid != -1) {
                $answers->where('answer_id', '=', $aid);
            }
        })
        */
        ->get();
        return $bussines;
        return view('index');
    }
}
