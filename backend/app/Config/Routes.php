<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Auth::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/shrimpMenu', 'Admin::shrimpMenu');
$routes->get('/accounts', 'Admin::accounts');
$routes->get('/requests', 'Admin::requests');
$routes->post('login', 'Auth::log_in');
$routes->post('logout', 'Auth::logout');
$routes->post('signup', 'Auth::sign_up');
