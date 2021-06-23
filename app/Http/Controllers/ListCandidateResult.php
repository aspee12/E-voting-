<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Position;
use App\Models\Voted;

class ListCandidateResult extends Controller
{
    public function display(){
        $countposition = Position::count();
        $data = Voted::count();
        $total = $data - $countposition +1;
        $positions =Position::all();
        $candidates = Candidate::all();
        return view('candidanresultlist')->with('candidates',$candidates)->with('positions',$positions)->with('total',$total);
    }

    public function voterdisplay(){
        $candidates = Candidate::all();
        return view('voters\homedisplay')->with('candidates',$candidates);
    }
}
