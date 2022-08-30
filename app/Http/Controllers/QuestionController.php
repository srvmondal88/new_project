<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{

    public function superdash()
     {
        return view('superadmin.dashboard');
     }

     public function questionList()
     {
         $res = Question::all();
         return view('superadmin.questions',['res'=>$res]);
     }

     public function questionadd()
     {
        return view('superadmin.questionadd');
     }

     public function store(Request $req)
     {
         $all = $req->except('_token');
          $answer = $all['oanswer'];
         $all['answer'] = $all['option'.$answer];

         Question::create($all);
         return redirect()->route('list');
     }

     public function delete($id)
     {
        Question::where('id',$id)->delete();
        return redirect()->route('list');
     }
}
