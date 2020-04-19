<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMessageController extends Controller
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
            'message_contact'   =>'required'
        ]);
    }
}
