<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Auth::login');
$routes->get('/signup', 'Auth::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/shrimpMenu', 'Admin::shrimpMenu');
