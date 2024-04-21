<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->group('', ['filter' => 'csrf'], function ($routes) {

    // Routing untuk Siswa
    $routes->get('siswa', 'Siswa::index');
    $routes->get('siswa/create', 'Siswa::create');
    $routes->post('siswa/store', 'Siswa::store');
    $routes->get('siswa/read/(:num)', 'Siswa::read/$1');
    $routes->get('siswa/edit/(:num)', 'Siswa::edit/$1');
    $routes->put('siswa/update/(:num)', 'Siswa::update/$1');
    $routes->get('siswa/delete/(:num)', 'Siswa::delete/$1');

    // Routing untuk Guru
    $routes->get('guru', 'Guru::index');
    $routes->get('guru/create', 'Guru::create');
    $routes->post('guru/store', 'Guru::store');
    $routes->get('guru/read/(:num)', 'Guru::read/$1');
    $routes->get('guru/edit/(:num)', 'Guru::edit/$1');
    $routes->put('guru/update/(:num)', 'Guru::update/$1');
    $routes->get('guru/delete/(:num)', 'Guru::delete/$1');

    // Routing untuk Nilai
    $routes->get('nilai', 'Nilai::index');
    $routes->get('nilai/create', 'Nilai::create');
    $routes->post('nilai/store', 'Nilai::store');
    $routes->get('nilai/read/(:num)', 'Nilai::read/$1');
    $routes->get('nilai/edit/(:num)', 'Nilai::edit/$1');
    $routes->put('nilai/update/(:num)', 'Nilai::update/$1');
    $routes->get('nilai/delete/(:num)', 'Nilai::delete/$1');
});