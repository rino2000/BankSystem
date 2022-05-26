<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $subject = 'Verify Email';
        return $this->view('auth.verify-email')->subject($subject);
    }
    // public function build()
    // {
    //     $address = env('MAIL_ADDRESS');
    //     $subject = 'Registrierungs Email';
    //     $name = 'Test';

    //     return $this->view('auth.email')
    //                 ->from($address, $name)
    //                 ->cc($address, $name)
    //                 ->bcc($address, $name)
    //                 ->replyTo($address, $name)
    //                 ->subject($subject)
    //                 ->with([ 'message' => $this->data['message'] ]);

    //   }
}
