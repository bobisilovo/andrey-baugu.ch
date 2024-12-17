<?php

namespace App\Controllers;

class Kontakt extends BaseController
{
    public function index()
    {
        
        return view("kontakt/kontakt");
    }

    public function submit() 
    {
        $email = \Config\Services::email();
        $email->setTo('info@andrey-baugu.ch');
        $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
        $email->setSubject('Kontakt poruka sa sajta andrey-baugu.ch');
        $email->setMessage($this->request->getPost('message'));
        
        if ($email->send()) {
            return redirect()->to('/kontakt/kontakt_uspeh');
        } else {
            return redirect()->to('/kontakt/kontakt_neuspeh');
        }
    }
    
    public function kontakt_uspeh() {
        return view('kontakt/kontakt_uspeh');
    }
    
    public function kontakt_neuspeh() {
        return view('kontakt/kontakt_neuspeh');
    }
}