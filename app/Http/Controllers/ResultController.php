<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use AuthenticatesUsers;
use App\Models\Menifesto;
use App\Models\Candidate;

class ResultController extends Controller
{
    public function result(){
        if(Auth::user()->usertype == 'voter'){

            return view('result.voteresult');
        }
    }

    //menifesto view details controller
    public function menifesto(){
        $menifestos =Menifesto::all();
        return view('menifesto.view')->with('menifestos', $menifestos);
    }

    public function adminresult()
    {
        $candidates = Candidate::all();
        return view('adminresult')->with('candidates', $candidates);
    }
}
