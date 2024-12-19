<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// http://localhost/ProyectoDW202416/RutaLogin
$routes->get('/CVistaF1', 'Cvistas::MMostrar1');
$routes->get('/CFormF1', 'CForms::MMostrar1');
$routes->get('/CResultF1', 'CResultado::MMostrar1');
$routes->get('/Login', 'LIndex::indexl');
$routes->get('/Mylogin', 'MLogin::MyLogin');