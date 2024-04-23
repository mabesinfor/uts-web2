<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['proyek'] = 'proyek';
$route['proyek/create'] = 'proyek/create';
$route['proyek/read/(:num)'] = 'proyek/read/$1';
$route['proyek/update/(:num)'] = 'proyek/update/$1';
$route['proyek/delete/(:num)'] = 'proyek/delete/$1';

$route['tim'] = 'tim';
$route['tim/create'] = 'tim/create';
$route['tim/read/(:num)'] = 'tim/read/$1';
$route['tim/update/(:num)'] = 'tim/update/$1';
$route['tim/delete/(:num)'] = 'tim/delete/$1';

$route['tugas'] = 'tugas';
$route['tugas/create'] = 'tugas/create';
$route['tugas/read/(:num)'] = 'tugas/read/$1';
$route['tugas/update/(:num)'] = 'tugas/update/$1';
$route['tugas/delete/(:num)'] = 'tugas/delete/$1';