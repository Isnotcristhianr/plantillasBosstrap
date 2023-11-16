<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//blank
$routes->get('/blank', 'Home::Home');


//login
$routes->get('/login', 'ControllerAdmin\loginController::login');

//inicio
$routes->get('/admin', 'ControllerAdmin\loginController::inicio');