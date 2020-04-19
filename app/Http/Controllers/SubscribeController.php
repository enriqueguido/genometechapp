<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;

class SubscribeController extends Controller
{

    function send(Request $request) 
    {
        $this->validate($request, [
            'email_subscribe'       => 'required|email'
        ]);
        $data = array(
            'email_subscribe'       => $request->email_subscribe,
        );

        Mail::to('codeblock.life@gmail.com')->send(new SubscribeMail($data));
        return back()->with('success-subscribe', 'Thank you for subscribing to our newsletter!');
    }
}
