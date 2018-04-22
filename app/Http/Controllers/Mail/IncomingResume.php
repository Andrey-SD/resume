<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class IncomingResume extends Controller
{
    public function send(Request $request)
	{
        $this->request = $request;
        $this->arr = ['name'=>$request->name,
					  'email'=>$request->email,
					  'message'=>$request->message];
        
		Mail::send('mails.incoming_resume',[ 'mes'=>$this->arr ], function ($message) {
           $message->from($this->request->email, "(Резюме):".$this->request->name."<<".$this->request->email.">>");
           $message->to($this->request->email,'')
                    ->subject($this->request->subject);
    });
	return view('sent');
	}
}
