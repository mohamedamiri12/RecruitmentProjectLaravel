<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;


class CandidateController extends Controller
{

    // search a candidate
    public function search(Request $request){
        $searchedText = $request->input('searchfield'); // searchfield name of input in view
        $candidates = Candidate::where('last-name', 'LIKE', '%'.$searchedText.'%', 'OR','firts-name','LIKE', '%'.$searchedText.'%')->get();
        return $candidates;
    }
}
