<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->post('/addItem', 'Pages::addItem');
$routes->get('/profile', 'Pages::profile');
