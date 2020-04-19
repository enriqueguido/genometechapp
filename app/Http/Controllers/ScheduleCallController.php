<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScheduleCallMail;

class ScheduleCallController extends Controller
{
    function index() 
    {
        return view('/index');
    }

    function send(Request $request) 
    {
        $this->validate($request, [
            'name_index'        => 'required',
            'email_index'       => 'required|email',
            'phone_num_index'   => 'required',
            'date_index'        => 'required'
        ]);
        $data = array(
            'name_index'        => $request->name_index,
            'email_index'       => $request->email_index,
            'phone_num_index'   => $request->phone_num_index,
            'date_index'        => $request->date_index
        );

        Mail::to('codeblock.life@gmail.com')->send(new ScheduleCallMail($data));
        return back()->with('success', 'Thank you! We look forward to speaking with you');
    }
}
