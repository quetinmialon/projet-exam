<?php
namespace App\services;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMail;
class SendMailService{
    public function sendMail($name, $email, $msg){
                // Envoie du mail
                Mail::to("healeypamal@gmail.com")->send(new ContactMail($name, $email, $msg));
    }
}
