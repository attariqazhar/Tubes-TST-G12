<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StoreController::index');
$routes->get('/profile-and-transaction','TransactionController::index');
$routes->get('/login', 'CustomerController::login');
$routes->get('/logout', 'CustomerController::logout');
$routes->post('/login_action', 'CustomerController::login_action');
$routes->post('/logout', 'CustomerController::logout');
$routes->get('/transaction','TransactionController::showTransactionHistory');
$routes->get('/search', 'ItemController::search');
$routes->post('/makeTransaction/(:num)/(:num)/(:any)','StoreController::makeTransaction/$1/$2/$3');

//API Routes
$routes->get('/transactionAPI/transactionData/(:any)','TransactionAPI::sendTransactionData/$1');
$routes->get('/transactionAPI/bestSeller/(:any)','TransactionAPI::sendBestSelling/$1');
$routes->get('/transactionAPI/totalIncome/(:any)','TransactionAPI::sendTotalIncome/$1');



