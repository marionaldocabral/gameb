<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Amranidev\Ajaxis\Ajaxis;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    public function home_adult(){
        $nivel = 'adult';
        $qtd_perguntas = \App\Question::count('id');
        return view('home', compact('nivel', 'qtd_perguntas'));
    }

    public function home_child(){
        $nivel = 'child';
        $qtd_perguntas = \App\Question::count('id');
        return view('home', compact('nivel', 'qtd_perguntas'));
    }

    public function index(){
    	$questions = \App\Question::orderBy('id', 'desc')->get();
    	return view('question.index', compact('questions'));
    }

    public function create(){
    	return view('question.create');
    }

    public function store(Request $request){
    	$question = new \App\Question();
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
    	return view('question.edit', compact('question'));
    }

    public function update($id, Request $request){
    	$question = \App\Question::findOrfail($id);
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

    public function lottery(Request $request){
        $maior = \App\Question::max('id');
        $id = 0;
        $question = NULL;
        while ($id == 0) {
           	$id = rand(1, $maior);
            $question = $question = \App\Question::where('id', $id)->first();
            if($question == NULL)
            	$id = 0;
        }

        return Response::json($question);     
    }
}
