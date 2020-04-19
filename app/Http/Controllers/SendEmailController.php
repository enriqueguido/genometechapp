<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function contact() 
    {
        return view('pages/contact');
    }

    function send() 
    {
        
    }
}
