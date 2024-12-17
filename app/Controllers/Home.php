<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        return view("home/index");
    }
    public function uberuns()
    {
        return view("home/uberuns");
    }
    public function philosophie()
    {
        return view("home/philosophie");
    }
    public function team()
    {
        return view("home/team");
    }
    public function galerie()
    {
        return view("home/galerie");
    }
    public function dienstleistungen()
    {
        return view("home/dienstleistungen");
    }
    public function neubauten()
    {
        return view("home/neubauten");
    }
    public function umbauten()
    {
        return view("home/umbauten");
    }
    public function kundenarbeiten()
    {
        return view("home/kundenarbeiten");
    }
    public function referenzen()
    {
        return view("home/referenzen");
    }
 /*    public function kontakt()
    {
        return view("home/kontakt");
    } */
    public function dobrodoslica(): string
    {
        //echo view("welcome_message");
        //return view('welcome_message');
        return view('layouts/parts/default-header')
        . view('layouts/parts/default-navbar')
        . view('welcome_message')
        . view('layouts/parts/default-footer');
    }
}