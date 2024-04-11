<?php

namespace App\contact\controllers;

use App\contact\services\SendMailService;
use App\shared\Controller;
use Illuminate\Http\Request;

// Assurez-vous que le chemin vers le service est correct


class ContactFormController extends Controller
{
    public function __construct(private SendMailService $sendMailService){

    }
    public function submit(Request $request) {
        // Validation des données
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);

        // Récupération des données du formulaire
        $name = $request->input('name');
        $email = $request->input('email');
        $msg = $request->input('msg');

        // Envoi du mail
        $this->sendMailService->sendMail($name, $email, $msg);
        // redirection
        return redirect('contactMail');
    }

    public function showContactForm()
    {
        return view('contactUs');
    }
}
