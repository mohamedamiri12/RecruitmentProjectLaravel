<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Mission;

class MissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    // save admin
    public function store(Request $request){
        $newMission = new Mission();
        if(
            $request->has(['client_id','candidate_id','start_date','end_date','description','type'])
        ){
            $newMission->client_id=$request->client_id;
            $newMission->candidate_id=$request->candidate_id;
            $newMission->start_date=$request->start_date;
            $newMission->end_date=$request->end_date;
            $newMission->description=$request->description;
            $newMission->type=$request->type;


            if($request->has('mission_status')){
                $newMission->mission_status=$request->mission_status;
            }

            // the mission to be activated by admin 
             $newMission->save();

            // Add File --> Cahier de charge
            if( $request->hasFile('mission_file') ){
                
                // Store The File
                $file_name = request()->file('mission_file')->getClientOriginalName();
                $path = $newMission->id.'/'.$file_name;
                $request->file('mission_file')->storeAs('cahiers_de_charges', $path ,'');
                $newMission->update( ['mission_file' => $file_name] );
            }
        }
        return $newMission;
    }
}
