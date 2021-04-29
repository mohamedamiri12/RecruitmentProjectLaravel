<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;

class MissionController extends Controller
{
    // show missions
    public function index(){
        $currentCandidateId = auth()->user()->id;
        $missions = Mission::where('candidate_id','LIKE', '%'.$currentCandidateId.'%')->get();
        return $missions;
    }

    // search a mission
    public function search(Request $request){
        $currentCandidateId = auth()->user()->id;
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $missions = Mission::where('description','LIKE', '%'.$searchedText.'%','AND','candidate_id','LIKE', '%'.$currentCandidateId.'%')->get();
        return $missions;
    }
}
