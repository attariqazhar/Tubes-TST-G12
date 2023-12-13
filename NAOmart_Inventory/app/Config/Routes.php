<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Pages::index');
$routes->post('/addItem', 'Pages::addItem');
$routes->get('/profile', 'Pages::profile');
=======
$routes->get('/', 'ItemController::index');
$routes->get('/profile', 'AccountController::index');
$routes->get('/login', 'AccountController::login');
$routes->get('/logout', 'AccountController::logout');
$routes->post('/login_action', 'AccountController::login_action');
$routes->post('/logout', 'AccountController::logout');
>>>>>>> a5c928c699c489e8cd0c0ee451792b2f77a5a249
