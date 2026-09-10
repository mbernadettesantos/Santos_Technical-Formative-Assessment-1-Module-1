<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home and About pages
$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');

// Customer and User listings
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');