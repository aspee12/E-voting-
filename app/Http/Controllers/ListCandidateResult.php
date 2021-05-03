<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Position;

class ListCandidateResult extends Controller
{
    public function display(){
        $positions =Position::all();
        $candidates = Candidate::all();
        return view('candidanresultlist')->with('candidates',$candidates)->with('positions',$positions);
    }

    public function voterdisplay(){
        $candidates = Candidate::all();
        return view('voters\homedisplay')->with('candidates',$candidates);
    }
}
