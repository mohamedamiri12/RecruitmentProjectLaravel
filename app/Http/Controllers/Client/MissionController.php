<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;
use Auth;

class MissionController extends Controller
{
    // show missions
    public function index(){
        $missions = Mission::orderBy('created_at','DESC')->get();
        return $missions;
    }

    // save mission
    public function store(Request $request){
        $newMission = new Mission();
        $newMission->type=$request->mission['type'];
        $newMission->startDate=$request->mission['start-date'];
        $newMission->endDate=$request->mission['end-date'];
        $newMission->decription=$request->mission['description'];
        $newMission->save();
        return $newMission;
    }

    // modify a mission
    public function update(Request $request,$id){
        $existingMission = Mission::find($id);
        if ($existingMission){
            $existingMission->type=$request->mission['type'];
            $existingMission->startDate=$request->mission['start-date'];
            $existingMission->endDate=$request->mission['end-date'];
            $existingMission->decription=$request->mission['description'];
            $existingMission->save();
            return $existingMission;
        }
    }

    // delete a mission
    public function destroy($id){
        $existingMission = Mission::find($id);
        if ($existingMission){
            $existingMission->delete();
        }
    }

    // search a mission
    public function search(Request $request){
        $currentClient = auth()->user()->id;
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $missions = Mission::where('description','LIKE', '%'.$searchedText.'%','AND','client_id','LIKE', '%'.$currentClient.'%')->get();
        return $missions;
    }
}
