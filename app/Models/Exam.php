<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Exam extends Model
{

    public function answers()
    {
      return $this->hasMany('App\Models\Answer', 'exam_id');
    }
    public static function save_exam($request)
    {
        $exam = new Exam();
        $exam->cat_id = $request['cat_id'];
        $exam->question = $request['question'];
        if($exam->save()){
          return true;
        } else{
          return false;
        }
    }  
    
    public static function updateExam($request,$id)
    {
      $update = DB::table('exams')
      ->where('id', $id)
      ->update([
        'cat_id' => $request['cat_id'],
        'question' => $request['question'],
      ]);
      if($update){
      return true;
      } else{
      return false;
      }
    }

    public static function getAllExam(){
        return Exam::all();
    }

    public static function getAllExamAndAnswers(){
      return Exam::with('answers')->get();
    }

    public static function getSingleQuestion($id){
      return Exam::where('id', $id)->first();
    }

    public static function deleteQuestion($id){
      return Exam::where('id', $id)->delete();
    }
}
