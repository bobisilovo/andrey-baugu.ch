<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/uberuns', 'Home::uberuns');
$routes->get('/philosophie', 'Home::philosophie');
$routes->get('/team', 'Home::team');
$routes->get('/galerie', 'Home::galerie');
$routes->get('/dienstleistungen', 'Home::dienstleistungen');
$routes->get('/neubauten', 'Home::neubauten');
$routes->get('/umbauten', 'Home::umbauten');
$routes->get('/kundenarbeiten', 'Home::kundenarbeiten');
$routes->get('/referenzen', 'Home::referenzen');

$routes->get('/kontakt', 'KontaktController::index');
$routes->post('/kontakt_slanje', 'KontaktController::kontakt_slanje');
$routes->get('/kontakt_uspeh', 'KontaktController::kontakt_uspeh');
$routes->get('/kontakt_neuspeh', 'KontaktController::kontakt_neuspeh');

$routes->get('/email-test', 'KontaktController::test');