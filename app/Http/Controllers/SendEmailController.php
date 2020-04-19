<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function contact() 
    {
        return view('pages/contact');
    }

    function send(Request $request) 
    {
        $this->validate($request, [
            'name_contact'      => 'required',
            'email_contact'     => 'required|email',
            'message_contact'   => 'required'
        ]);
        $data = array(
            'name_contact'      => $request->name_contact,
            'email_contact'     => $request->email_contact,
            'message_contact'   => $request->message_contact
        );

        Mail::to('codeblock.life@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thank you for contacting us we will get back to you as soon as possible!');
    }
}