<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public static function getAllCategory(){
        return Category::all();
    }
}
