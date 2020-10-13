<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
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
}
