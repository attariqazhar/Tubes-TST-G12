<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Coba::about');
$routes->get('/dashboard', 'Pages::index');
$routes->get('/profile', 'Pages::profile');
$routes->get('/public/profile.jpg', 'Pages::profile');
