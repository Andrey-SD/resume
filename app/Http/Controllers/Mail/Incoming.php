<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\IncomingMail;
use Mail;

class Incoming extends Controller
{
    public $request;
    public function send(Request $request)
	{
        $this->request = $request;
//        $name = $request->name;
//        $email = $request->email;
//        $message = $request->message;
//        $subject = $request->subject;
        
		Mail::send('mails.incoming', [], function ($message) {
           $message->from($this->request->email, "(Резюме):".$this->request->name."<<".$this->request->email.">>");
           $message->to('andrey.sd.post@gmail.com', 'Resume')
                    ->subject($this->request->subject);
       });
		
		
		
		//Mail::to('andrey.sd.post@gmail.com')->send(new IncomingMail($name,$email,$message,$subject));
	}
}
