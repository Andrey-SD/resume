<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class Incoming extends Controller
{
    public $request;
    public $arr;
    
    public function send(Request $request)
	{
        $this->request = $request;
        $this->arr = ['name'=>$request->name,
										'email'=>$request->email,
										'message'=>$request->message];
        
		Mail::send('mails.incoming',[ 'mes'=>$this->arr ], function ($message) {
           $message->from($this->request->email, "(Резюме):".$this->request->name."<<".$this->request->email.">>");
           $message->to('andrey.sd.post@gmail.com', 'Мне')
                    ->subject($this->request->subject);
    });
	return view('sent');
	}
}
