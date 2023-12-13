<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/login', 'Pages::login');
$routes->get('/logout', 'CustomerController::logout');
$routes->post('/login_action', 'CustomerController::login_action');
$routes->get('/transaction','TransactionController::showTransactionHistory');
$routes->get('/profile-and-transaction','Pages::transaction');
