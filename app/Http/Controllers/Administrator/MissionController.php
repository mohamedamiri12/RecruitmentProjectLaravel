<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;


class MissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    // show missions
    public function index(){
        $missions = Mission::with("client")->with("candidate")->get();
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
    // delete a client
    public function destroy($id){
        $existingMission = Mission::find($id);
        if ($existingMission){
            $existingMission->delete();
        }
    }
}
