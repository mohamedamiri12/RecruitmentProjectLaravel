<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;


class CandidateController extends Controller
{
    // show candidates
    public function index(){
        $candidates = Candidate::orderBy('created_at','DESC')->get();
        return $candidates;
    }
    
    // modify an candidate
    public function update(Request $request,$id){
            $existingCandidate = Candidate::find($id);
            if ($existingCandidate){
                $existingCandidate->first_name=$request->candidate['first_name'];
                $existingCandidate->last_name=$request->candidate['last_name'];
                $existingCandidate->email=$request->candidate['email'];
                // hashed password
                $existingCandidate->password=$request->candidate['password'];
                $existingCandidate->phone_number=$request->candidate['phone_number'];
                $existingCandidate->save();
                    return $existingCandidate;
            }
    }

    // search a candidate
    public function search(Request $request){
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $candidates = Candidate::where('last-name', 'LIKE', '%'.$searchedText.'%', 'OR','firts-name','LIKE', '%'.$searchedText.'%')->get();
        return $candidates;
    }
}
