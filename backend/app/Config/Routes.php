<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/moodboard_page', 'Users::moodboard');
$routes->get('/roadmap_page', 'Users::roadmap');


$routes->get('/login', 'Auth::login_page');
$routes->get('/signup', 'Auth::signup_page');


$routes->post('/login', 'Auth::login');
$routes->post('/logout', 'Auth::logout');
$routes->post('/signup', 'Auth::signup');


$routes->get('/admin/dashboard', 'Admin::dashboard');
