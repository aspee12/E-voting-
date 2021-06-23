<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultDeclare;

class ResultDeclareController extends Controller
{
    //
    public function makepublic()
    {
        return "test";
        // $setting = ResultDeclare::findOrCreate(1);
        // $setting->update('state = 1');

        // if($setting->update()){

        //     return 'decleared';
        // }
        // else{

        //     return 'not delcared';
        // }
    }

}
