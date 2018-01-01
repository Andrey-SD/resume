<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\IncomingMail;
use Mail;

class Incoming extends Controller
{
	public $subject;
	
    public function send(Request $request)
	{
	$name = $request->name;
	$email = $request->email;
	$message = $request->message;
	$this->subject = $request->subject;
	
	//echo $subject;
	
		Mail::send('mails.incoming', [], function ($message) {
            $message->from('sender@test.com', 'ga');
            $message->to('andrey.sd.post@gmail.com', 'Receiver')
							//		->subject($this->subject)
							->subject($request->subject);
									;
        });
	}
}
