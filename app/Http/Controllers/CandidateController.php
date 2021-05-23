<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:client');
    }

    // show candidates
    public function index(){
        $candidates = Candidate::with('skills')->orderBy('created_at','DESC')->get();
        return $candidates;
    }

    public function getCandidate($id){
        $candidate = Candidate::with('missions')->with('skills')->find($id);
        return $candidate;
    }
}
