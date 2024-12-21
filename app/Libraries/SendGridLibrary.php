<?php

namespace App\Libraries;

// Dodajte putanju za uključivanje autoloadera 
#require_once(APPPATH . 'ThirdParty/sendgrid/sendgrid-php.php');
require_once(APPPATH . 'ThirdParty/sendgrid/vendor/autoload.php');

use SendGrid;

class SendGridLibrary
{
    protected $sendGrid;

    public function __construct()
    {
        $apiKey = 'API_KEY';
        $this->sendGrid = new SendGrid($apiKey);
    }

    public function sendEmail($to, $subject, $content)
    {
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("admin@andrey-baugu.ch", "Sa sajta andrey-baugu.ch");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $content);
        
        try {
            $response = $this->sendGrid->send($email);
            return $response;
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            return false;
        }
    }
}