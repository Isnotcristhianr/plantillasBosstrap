<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//blank
$routes->get('/blank', 'Home::Home');

//login
$routes->get('/loginadmin', 'ControllerAdmin\loginController::loginadmin');
