<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->set404Override('\App\Controllers\Condition::error_404');

$routes->get('/', 'Home::index');
$routes->get('profile', 'Home::profile');
$routes->get('package-(:segment)', 'Home::package_detail/$1');
$routes->get('chat', 'Home::chat');