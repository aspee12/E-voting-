<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class ChangePasswordController extends Controller
{
    //
    public function _construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        return view('admin.changePassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' =>['required',new MatchOldPassword],
            'new_password'=>['required', 'string', 'min:8', 'confirmed'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=>Hash::make($request->new_password)]);
         return redirect('/role') ->with('succ','Password Succefully Update!');

        // if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
        //     return back()->with('error','Your current password does not match!');
        // }
    }

}
