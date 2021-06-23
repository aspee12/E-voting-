<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
class ProfileController extends Controller
{
    //

    public function userprofile(){
        $id = Auth::user()->id;
        // $users = User::all();
        $data['data'] = DB::table('users')->where('id','=',$id)->first();
        $datas['datas'] = DB::table('users')->where('id','=',$id)->first();
        if(count($data)>0){
            return view('userprofile')->with('data',$data)->with('datas',$datas);
        }
    }

}
