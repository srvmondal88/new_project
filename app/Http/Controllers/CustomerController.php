<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;
use App\Models\Answer;
use Auth;

class CustomerController extends Controller
{
  public function cusdash()
  {
     return view('customers.dashboard');
  }

  public function planlist()
  {
     $res = DB::table('questions')
                ->inRandomOrder()
                ->limit(5)
                ->select('id','questions','option1','option2','option3','option4')
                ->get();
      // return $res;
     return view('customers.questions',['res'=>$res]);
  }

  public function ansStore(Request $req)
  {
     $array = array();

     $id = Auth::id();

     Answer::where('user_id',$id)->delete();

     foreach ($req['qstn'] as $key => $value) {

          $array['user_id'] = $id;
          $array['question_id'] = $value;
          $array['answer'] = $req['oanswer_'.$value];

         // return $array;
         Answer::create($array);
     }
     // return $req;
     return redirect()->route('result');
  }


  public function result()
  {
      $id = Auth::id();
      $res = DB::table('answers')->leftjoin('questions','answers.question_id','questions.id')
             ->where('answers.user_id',$id)
             ->select('answers.answer as Aanswer','questions.questions','questions.answer as Qanswer')->get();

      return view('customers.result',['res'=>$res]);
      // return $res;
  }


}
