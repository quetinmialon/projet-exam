<?php

namespace App\contact\models;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name, $email, $msg;

    // On hydrate $name, $email et $msg
    public function __construct($name, $email, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
    }
    public function build()
    {
        return $this->subject('Contact depuis mon site')->view('contactUs');
    }

}
