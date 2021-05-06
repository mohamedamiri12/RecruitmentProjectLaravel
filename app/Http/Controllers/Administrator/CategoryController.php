<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    // show categories
    public function index(){
        $categories = Category::with("skills")->orderBy('created_at','DESC')->get();
        return $categories;
    }

    // save category
    public function store(Request $request){
        $newCategory = new Category();
        $newCategory->name=$request->name;
        $newCategory->description=$request->description;
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

    // Add Skill To category
    public function addSkill(Request $request,$id){
        $existingCategory = Category::find($id);
        if($existingCategory){
            if( $request->has('new_skill_id') ){
                $skill_id = $request->input('new_skill_id');
                $existingCategory->skills()->attach($skill_id);
            }
        }
    }

    // affect skill to groupe
    public function deleteSkill(Request $request,$id){
        $existingCategory = Category::find($id);
        if ($existingCategory){
            if( $request->has('old_skill_id') ){
                $skill_id = $request->input('old_skill_id');
                $existingCategory->skills()->detach($skill_id);
            }
        }
    }
}
