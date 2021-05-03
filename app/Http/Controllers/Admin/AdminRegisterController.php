<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function create() {
        return view('admin\adminregister');
    }
    public function store(Request $request) {

        $request->validate([
                'name'              =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'phone'             =>      'required|numeric',
                'usertype'          =>      'required|string',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
        ]);

        
        $user =  User::create([
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "phone"         =>          $request->phone,
            "usertype"      =>          $request->usertype,
            "password"      =>          Hash::make($request->password)
        ]);
        if(is_null($user)){
            abort(419);
        }
        return redirect()->route('login');
    }
}
