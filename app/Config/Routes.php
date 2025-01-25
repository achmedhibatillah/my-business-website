<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->set404Override('\App\Controllers\Condition::error_404');

$routes->get('s', 'Condition::s');
$routes->get('p', 'Condition::p');

$routes->get('/', 'Home::index');
$routes->get('profile', 'Home::profile');
$routes->get('package-(:segment)', 'Home::package_detail/$1');
$routes->get('chat', 'Home::chat');

$routes->post('submit-suggestion', 'Home::suggestion_a');
$routes->post('submit-rate', 'Home::rate_a');
$routes->post('submit-order', 'Home::order_a');