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

    public function display()
    {
        $id = Auth::user()->id;
        // $users = User::all();
        $data['data'] = DB::table('users')->where('id','=',$id)->first();
        $datas['datas'] = DB::table('users')->where('id','=',$id)->first();
        if(count($data)>0){
            return view('uploadprofile')->with('data',$data);
        }
    }


    public function upload(Request $request,$id)
    {
        $request->validate([
            'profile'=> 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048000',
           
        ]);

        $upload = User::find($id);
        if($request->hasfile('profile')){
            $file = $request->file('profile');
            $extension= $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file -> move('uploads/userprofile/',$filename);
            $upload -> profile=$filename;
        }
        else{
            return $request;
            $upload->profile='';
        }
        
        $upload->save();
        return redirect()->route('profile')->with('msg','Your Profile Uploaded Successfully.');
    }

}
