<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declareresult;
use App\Models\Candidate;
class DeclareresultController extends Controller
{
    //
    public function declarepublic()
    {
        $result = Declareresult::findOrFail(1);
        $result->update(['state' => '1']);
        //$candidates = Candidate::all();
        return redirect('/adminresults')->with('mess','Successfully Declared Result to public!');
    }
    public function makeprivate()
    {
        $result = Declareresult::findOrFail(1);
        $result->update(['state' => '0']);
        return redirect('/adminresults')->with('succss','Result has been made private!');
    }
}
