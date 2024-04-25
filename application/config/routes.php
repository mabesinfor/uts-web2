<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth'] = 'auth';
$route['auth/register'] = 'auth/register';
$route['auth/register_user'] = 'auth/register_user';
$route['auth/login_user'] = 'auth/login_user';
$route['auth/logout'] = 'auth/logout';

$route['siswa'] = 'siswa';
$route['siswa/create'] = 'siswa/create';
$route['siswa/read/(:num)'] = 'siswa/read/$1';
$route['siswa/update/(:num)'] = 'siswa/update/$1';
$route['siswa/delete/(:num)'] = 'siswa/delete/$1';

$route['guru'] = 'guru';
$route['guru/create'] = 'guru/create';
$route['guru/read/(:num)'] = 'guru/read/$1';
$route['guru/update/(:num)'] = 'guru/update/$1';
$route['guru/delete/(:num)'] = 'guru/delete/$1';

$route['nilai'] = 'nilai';
$route['nilai/create'] = 'nilai/create';
$route['nilai/read/(:num)'] = 'nilai/read/$1';
$route['nilai/update/(:num)'] = 'nilai/update/$1';
$route['nilai/delete/(:num)'] = 'nilai/delete/$1';