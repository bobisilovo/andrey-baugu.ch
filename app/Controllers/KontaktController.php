<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\SendGridLibrary;

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

        // Validacija podataka
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $sendGrid = new SendGridLibrary();
        $subject = "Kontakt poruka sa sajta andrey-baugu.ch";
        #$content = "Ime: $name\nEmail: $email\nPoruka:\n$message";
        $content = "Ime:<br>$name<br><br>Email:<br>$email<br><br>Poruka:<br>$message";
        #$response = $sendGrid->sendEmail('admin@andrey-baugu.ch', 'Test', 'Email content');
        $response = $sendGrid->sendEmail("admin@andrey-baugu.ch", $subject, $content);
        if ($response) {
            #$echo 'Email sent successfully!';
            return redirect()->to(base_url('kontakt_uspeh'));
        } else {
            #echo 'Failed to send email.';
            return redirect()->to(base_url('kontakt_neuspeh'))->with('error', 'Failed to send email.');
        }
    }

    public function kontakt_uspeh() {
        return view('kontakt/kontakt_uspeh');
    }

    public function kontakt_neuspeh() {
        return view('kontakt/kontakt_neuspeh');
    }
    public function test()
    {
        $sendGrid = new SendGridLibrary();
        $response = $sendGrid->sendEmail('admin@andrey-baugu.ch', 'Test', 'Email content');

        if ($response) {
            echo 'Email sent successfully!';
        } else {
            echo 'Failed to send email.';
        }
    }
}