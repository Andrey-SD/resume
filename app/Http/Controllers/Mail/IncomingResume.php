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
           $message->to($this->request->email,'')
                    ->subject('Резюме Junior PHP developer Андрей Деркач ');
    });
	return view('sent');
	}
}
