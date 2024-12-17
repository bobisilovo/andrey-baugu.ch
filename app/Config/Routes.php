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

$routes->get('/kontakt', 'Kontakt::index');
$routes->post('/kontakt/submit', 'Kontakt::submit');
$routes->get('/kontakt/kontakt_uspeh', 'Kontakt::kontakt_uspeh');
$routes->get('/kontakt/kontakt_neuspeh', 'Kontakt::kontakt_neuspeh');
