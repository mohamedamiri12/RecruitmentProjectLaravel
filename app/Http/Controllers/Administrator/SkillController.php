<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Category;



class SkillController extends Controller
{
    
    // save skill
    public function store(Request $request){
        $newSkill = new Skill();
        $newSkill->name=$request->skill['name'];
        $newSkill->save();
        return $newSkill;
    }

    // modify a skill
    public function update(Request $request,$id){
        $existingSkill = Skill::find($id);
        if ($existingSkill){
            $existingSkill->name=$request->skill['name'];
            $existingSkill->save();
            return $existingSkill;
        }
    }

    // delete a skill
    public function destroy($id){
        $existingSkill = Skill::find($id);
        if ($existingSkill){
            $existingSkill->delete();
        }
    }

    // affect skill to groupe
    public function affect(Request $request,$id){
        $existingSkill = Skill::find($id);
        if ($existingSkill){
            $existingSkill->categories()->attach(Category::where('name', $request->category['name'])->get());
        }
    }
}