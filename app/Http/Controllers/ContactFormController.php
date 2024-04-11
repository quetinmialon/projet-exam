<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SendMailService; // Assurez-vous que le chemin vers le service est correct


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
