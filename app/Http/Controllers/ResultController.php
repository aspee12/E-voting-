<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use AuthenticatesUsers;
use App\Models\Menifesto;
use App\Models\Candidate;
use App\Models\Declareresult;

class ResultController extends Controller
{
    public function result(){
        if(Auth::user()->usertype == 'voter'){
            $declared = Declareresult::where('state', 1)->count();
            $result = Declareresult::find(1);
            $candidates = Candidate::all();
            return view('result.voteresult')
                    ->with('result',$result)
                    ->with('candidates',$candidates)
                    ->with('declared',$declared);
        }
    }

    //menifesto view details controller
    public function menifesto(){
        $menifestos =Menifesto::all();
        return view('menifesto.view')->with('menifestos', $menifestos);
    }

    //home page
    public function menifestoview(){
        $menifestos =Menifesto::all();
        return view('main')->with('menifestos', $menifestos);
    }

    public function adminresult()
    {
        $candidates = Candidate::all();
        return view('adminresult')->with('candidates', $candidates);
    }
}
