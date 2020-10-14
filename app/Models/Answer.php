<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function exam()
    {
        return $this->belongsTo('App\Models\Exam');
    }

    public static function save_answers($request)
    {
        $answer = new Answer();
        $answer->exam_id = $request['exam_id'];
        $answer->answer = $request['answer'];
        if($answer->save()){
          return true;
        } else{
          return false;
        }
    }   

    public static function updateAnswer($request,$id)
    {
      $update = DB::table('exams')
      ->where('id', $id)
      ->update([
        'exam_id' => $request['exam_id'],
        'answer' => $request['answer'],
      ]);
      if($update){
      return true;
      } else{
      return false;
      }
    }

    public static function getSingleAnswer($id){
        return Answer::where('id', $id)->first();
    }
    
    public static function deleteAnswers($id){
        return Answer::where('exam_id', $id)->delete();
    }

    public static function deleteSingleAnswers($id){
        return Answer::where('id', $id)->delete();
    }
}
