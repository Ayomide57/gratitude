<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
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
    
    public static function getAllExam(){
        return Exam::all();
    }

    public static function getAllExamAndAnswers(){
      return Exam::join('answers', 'exams.id', '=', 'answers.exam_id')
      ->select('exams.*', 'answers.*')
      ->get();
  }
}
