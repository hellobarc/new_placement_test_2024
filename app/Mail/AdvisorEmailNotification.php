<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdvisorEmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email_visitor_info;
    public $subject;

    public function __construct($email_visitor_info, $subject)
    {
        $this->email_visitor_info = $email_visitor_info;   
        $this->subject = $subject; 
    }

    public function build()
    {
        return $this->subject($this->subject)->view('mail.advisor-mail-notification');
    }
   
}
