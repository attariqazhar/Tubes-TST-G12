<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */





// $routes->get('/', 'Pages::index');
// $routes->post('/addItem', 'Pages::addItem');
// $routes->get('/profile', 'Pages::profile');
// $routes->post('/addItem', 'Pages::addItem');
// $routes->get('/profile', 'Pages::profile');

$routes->get('/', 'ItemController::index');
$routes->get('/profile', 'AccountController::index');
$routes->get('/login', 'AccountController::login');
$routes->get('/logout', 'AccountController::logout');
$routes->post('/login_action', 'AccountController::login_action');
$routes->post('/logout', 'AccountController::logout');
$routes->get('delete/(:num)', 'Pages::delete/$1');
$routes->post('/addItem', 'ItemController::addItem');
$routes->post('item/updateStock/(:num)/(:num)', 'ItemController::updateStock/$1/$2');


// API routes 
$routes->get('/API/getItems', 'ItemAPI::getItems');
$routes->get('/API/getLowStock', 'ItemAPI::getLowStock');
$routes->post('API/update/(:num)', 'ItemController::updateStock/$1');
