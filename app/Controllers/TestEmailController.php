<?php

namespace App\Controllers;

use App\Libraries\SendGridLibrary;

class EmailController extends BaseController
{
    public function send()
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
