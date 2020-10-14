<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Category extends Model
{
  
    public static function save_category($request)
    {
        $category = new Category();
        $category->name = $request['name'];
        if($category->save()){
          return true;
        } else{
          return false;
        }
    }

    public static function updateCategory($request,$id)
    {
      $update = DB::table('categories')
      ->where('id', $id)
      ->update(['name' => $request['name']]);
      if($update){
      return true;
      } else{
      return false;
      }
    }

    public static function getAllCategory(){
        return Category::all();
    }

    public static function getSingleCategory($id){
      return Category::where('id', $id)->first();
    }

    public static function deleteSingleCategory($id){
      return Category::where('id', $id)->delete();
    }
}
