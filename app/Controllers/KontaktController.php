<?php

namespace App\Controllers;

class KontaktController extends BaseController
{
    public function index()
    {        
        return view("kontakt/kontakt");
    }

    public function kontakt_slanje() 
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Proveri podatke
        #var_dump($name, $email, $message);

        // Validacija podataka
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
/* 
        $email = \Config\Services::email();
        $email->setTo('info@andrey-baugu.ch');
        $email->setFrom($email, $name);
        $email->setSubject('Kontakt poruka sa sajta andrey-baugu.ch');
        $email->setMessage($message);
        
        if ($email->send()) { */

        $emailService = \Config\Services::email();
        $emailService->setTo('info@andrey-baugu.ch');
        $emailService->setFrom($email, $name); // Ispravljeno: koristi varijablu $email za adresu pošiljaoca
        $emailService->setSubject('Kontakt poruka sa sajta andrey-baugu.ch');
        $emailService->setMessage($message);
        
        if ($emailService->send()) {
            return redirect()->to('kontakt_uspeh');
        } else {
            return redirect()->to('kontakt_neuspeh');
        }
    }
    
    public function kontakt_uspeh() {
        return view('kontakt/kontakt_uspeh');
    }
    
    public function kontakt_neuspeh() {
        return view('kontakt/kontakt_neuspeh');
    }
}