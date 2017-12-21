<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\IncomingMail;
use Mail;

class Incoming extends Controller
{
    public function send(Request $request)
//    public function send()
	{
//		Mail::send('mails.incoming', [], function ($message) {
//            $message->from('andrey.sd.post@gmail.com', 'Sender');
//            $message->to('andrey.sd.post@gmail.com', 'Receiver')->subject('Тестовое письмо с HTML');
//        });
//		$name = $request->name;
//		$email = $request->email;
//		$message = $request->message;
//		$subject = $request->subject;
		$name = 'bal';
		$email = 'bal';
		$message = 'bal';
		$subject = 'bal';
		
		Mail::to('andrey.sd.post@gmail.com')->send(new IncomingMail($name,$email,$message,$subject));
	}
}
