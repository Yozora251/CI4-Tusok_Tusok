<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login_page', 'Users::login');
$routes->get('/signup_page', 'Users::signup');
$routes->get('/moodboard_page', 'Users::moodboard');
$routes->get('/roadmap_page', 'Users::roadmap');
