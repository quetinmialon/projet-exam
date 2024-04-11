<?php
namespace App\contact\services;
use App\contact\models\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendMailService{
    public function sendMail($name, $email, $msg){
                // Envoie du mail
                Mail::to("healeypamal@gmail.com")->send(new ContactMail($name, $email, $msg));
    }
}
