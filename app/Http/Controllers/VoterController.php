<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Position;

class VoterController extends Controller
{
    public function voting(){
        $positions = Position::all();
        $voters = Candidate::all();
        return view('voters.voter')->with('positions',$positions)->with('voters',$voters);
    }

    public function canditatevote(Request $request){
        $candidates = Candidate::where('position_id',$request->position_id)->get();
        $positions = Position::where('id',$request->position_id)->first();
        return view('voters.votings')->with('candidates',$candidates)->with('positions',$positions);
    }
    public function vote(Request $request)
    {
        # code...
        
        $candidate = Candidate::findOrFail($request->candidate_id);
        if($request->option == 'yes'){
            $candidate->yes_count = $candidate->yes_count +1;
        }else if($request->option == 'no'){
            $candidate->no_count = $candidate->no_count+1;
            
        }
        $candidate->save();
        return redirect()->route('succ.vote')->with('success','Your Vote is Successfully Casted! Please Complete Your Vote.');; 
    }
    public function votes(Request $request)
    {
        # code...
        $candidate = Candidate::findOrFail($request->candidate_id);
        $candidate->vote_count = $candidate->vote_count + 1;
        $candidate->save();
        return redirect()->route('succ.vote')->with('success','Your Vote is Successfully Casted!Please Complete Your Vote.');;
    }
}
