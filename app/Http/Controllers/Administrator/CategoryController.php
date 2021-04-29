<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    // show categories
    public function index(){
        $categories = Category::orderBy('created_at','DESC')->get();
        return $categories;
    }

    // save category
    public function store(Request $request){
        $newCategory = new Category();
        $newCategory->name=$request->category['name'];
        $newCategory->description=$request->category['description'];
        $newCategory->save();
        return $newCategory;
    }

    // modify a category
    public function update(Request $request,$id){
        $existingCategory = Category::find($id);
        if ($existingCategory){
            $existingCategory->name=$request->category['name'];
            $existingCategory->description=$request->category['description'];
            $existingCategory->save();
            return $existingCategory;
        }
    }

    // delete a category
    public function destroy($id){
        $existingCategory = Category::find($id);
        if ($existingCategory){
            $existingCategory->delete();
        }
    }
}
