<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;


class MissionController extends Controller
{
    // show missions
    public function index(){
        $missions = Mission::orderBy('created_at','DESC')->get();
        return $missions;
    }

    // validate a mission
    public function validateMission($id){
        $existingMission = Mission::find($id);
            if ($existingMission){
                $existingMission->status="validé";
                $existingMission->save();
            }
    }

    // refuse a mission
    public function rejectMission($id){
        $existingMission = Mission::find($id);
            if ($existingMission){
                $existingMission->status="refusé";
                $existingMission->save();
            }
    }
}
