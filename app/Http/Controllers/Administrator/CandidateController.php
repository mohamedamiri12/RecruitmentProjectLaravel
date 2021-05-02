<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;


class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    // show candidates
    public function index(){
    $candidates = Candidate::orderBy('created_at','DESC')->get();
    return $candidates;
    }

    // modify an candidate
    public function update(Request $request,$id){
        $existingCandidate = Candidate::find($id);

        if ($existingCandidate){
            if($request->has('first_name')){
                $existingCandidate->first_name=$request->first_name;
            }
            if($request->has('last_name')){
                $existingCandidate->last_name=$request->input('last_name');
            }
            if($request->has('email')){
                $existingCandidate->email=$request->input('email');
            }
            if($request->has('phone_number')){
                $existingCandidate->phone_number=$request->phone_number;
            }
            if($request->has('is_suspended')){
                $existingCandidate->is_suspended=$request->is_suspended;
            }
            // Update the User Profile Image
            if( $request->hasFile('candidate_image') ){
                
                // Store The Image in the folder Storage/app/public/images
                $avatar = request()->file('candidate_image')->getClientOriginalName();
                $path = $existingCandidate->id.'/'.$avatar;
                $request->file('candidate_image')->storeAs('candidateImages', $path ,'');
                $existingCandidate->candidate_image=$avatar;
            }
            
            // hashed password
            //$existingAdmin->password=$request->administrator['password'];

            $existingCandidate->save();
            return $existingCandidate;
        }
    }

    // delete an candidate
    public function destroy($id){
        $existingCandidate = Candidate::find($id);
            if ($existingCandidate){
                $existingCandidate->delete();
            }
    }

    // suspend a candidate
    public function suspend($id){
        $existingCandidate = Candidate::find($id);
            if ($existingCandidate){
                $existingCandidate->is_suspended=1;
                $existingCandidate->save();
            }
    }

    // search a candidate
    public function search(Request $request){
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $candidates = Candidate::where('last-name', 'LIKE', '%'.$searchedText.'%', 'OR','first-name','LIKE', '%'.$searchedText.'%')->get();
        return $candidates;
    }
}
