<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    public function welcome(){
        $temas = \App\Tema::all();
        return view('welcome', compact('temas'));
    }

    public function home(Request $request){
        $nivel = $request->nivel;
        $tema = $request->tema;
        return view('home', compact('nivel', 'tema'));
    }

    public function index(){
    	$questions = \App\Question::orderBy('tema')->orderBy('id', 'desc')->get();        
    	return view('question.index', compact('questions'));
    }

    public function create(){
        $temas = \App\Tema::all();
    	return view('question.create', compact('temas'));
    }

    public function store(Request $request){
    	$question = new \App\Question();
        $question->nivel = $request->nivel;
        $question->tema = $request->tema;
        $tema = \App\Tema::where('tema', $request->tema)->first();
        //caso o tema não exista, cria no banco de dados
        if($tema == NULL){
            $tema = new \App\Tema();
            $tema->tema = $request->tema;
            $tema->save();
        }
    	$question->question = $request->question;
    	$question->option_a = $request->option_a;
    	$question->option_b = $request->option_b;
    	$question->option_c = $request->option_c;
    	$question->option_d = $request->option_d;
    	$question->answer = $request->answer;

    	$question->save();

    	return redirect('question')->with('success', 'Questão registrada com sucesso!');
    }

    public function edit($id){
    	$question = \App\Question::findOrfail($id);
        $temas = \App\Tema::all();
    	return view('question.edit', compact('question', 'temas'));
    }

    public function update($id, Request $request){
    	$question = \App\Question::findOrfail($id);
        $question->nivel = $request->nivel;
        $question->tema = $request->tema;
        $tema = \App\Tema::where('tema', $request->tema)->first();
        //caso o tema não exista, cria no banco de dados
        if($tema == NULL){
            $tema = new \App\Tema();
            $tema->tema = $request->tema;
            $tema->save();
        }
    	$question->question = $request->question;
    	$question->option_a = $request->option_a;
    	$question->option_b = $request->option_b;
    	$question->option_c = $request->option_c;
    	$question->option_d = $request->option_d;
    	$question->answer = $request->answer;

    	$question->save();

    	return redirect('question')->with('success', 'Questão atualizada com sucesso!');
    }

    public function destroy($id){
    	$question = \App\Question::findOrfail($id);
    	$question->delete();

    	return redirect('question')->with('success', 'Questão removida com sucesso!');
    }

    public function lottery($nivel, $tema){
        $question = \App\Question::where([['respondida', '0'], ['nivel', $nivel], ['tema', $tema]])->inRandomOrder()->first();
        if($question != NULL){
            $question->respondida = 1;
            $question->save();            
        }
        return Response::json($question);
    }

    public function reset(){
        $questions = \App\Question::all();
        foreach ($questions as $question) {
            if($question->respondida == 1){
                $question->respondida = 0;
                $question->save();
            }

        }
    }

    public function winner(){
        return view('winner');
    }
}