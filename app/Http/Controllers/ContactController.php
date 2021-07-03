<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Mail;
class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contactus');
    }

    public function sendMail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'message' => $request->message
        ];
        Mail::to('aspeee12@gmail.com')->send(new ContactUs($details));
        return redirect()->back()->with('msg','Your Message has been succfully sent!');
    }
}
