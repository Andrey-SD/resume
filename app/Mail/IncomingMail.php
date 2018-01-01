<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncomingMail extends Mailable
{
    use Queueable, SerializesModels;
	
	protected $name;
	protected $email;
	public $subject;
	protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$message,$subject)
    {
        $this->name = $name;
		$this->email = $email;
		$this->subject = $subject;
		$this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.incoming')
			->with([
				'name' => $this->name,
				'email' => $this->email,
			]);
    }
}
