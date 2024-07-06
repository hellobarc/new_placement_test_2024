<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StudentResultEmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $stu_result;
    public $subject;

    public function __construct($stu_result, $subject)
    {
        $this->stu_result = $stu_result;   
        $this->subject = $subject; 
    }

    public function build()
    {
        return $this->subject($this->subject)->view('mail.student-result-mail-notification');
    }
   
}
