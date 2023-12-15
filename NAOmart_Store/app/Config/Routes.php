<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ItemController::index');
$routes->get('/profile-and-transaction','TransactionController::index');
$routes->get('/login', 'CustomerController::login');
$routes->get('/logout', 'CustomerController::logout');
$routes->post('/login_action', 'CustomerController::login_action');
$routes->post('/logout', 'CustomerController::logout');
$routes->get('/transaction','TransactionController::showTransactionHistory');
$routes->get('/transactionAPI/transactionData','TransactionAPI::sendTransactionData');
$routes->get('/transactionAPI/bestSeller','TransactionAPI::sendBestSelling');
$routes->get('/transactionAPI/totalIncome','TransactionAPI::sendTotalIncome');
$routes->get('/search', 'ItemController::search');


