<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['mobil'] = 'mobil';
$route['mobil/create'] = 'mobil/create';
$route['mobil/read/(:num)'] = 'mobil/read/$1';
$route['mobil/update/(:num)'] = 'mobil/update/$1';
$route['mobil/delete/(:num)'] = 'mobil/delete/$1';

$route['penyewa'] = 'penyewa';
$route['penyewa/create'] = 'penyewa/create';
$route['penyewa/read/(:num)'] = 'penyewa/read/$1';
$route['penyewa/update/(:num)'] = 'penyewa/update/$1';
$route['penyewa/delete/(:num)'] = 'penyewa/delete/$1';

$route['sewa'] = 'sewa';
$route['sewa/create'] = 'sewa/create';
$route['sewa/read/(:num)'] = 'sewa/read/$1';
$route['sewa/update/(:num)'] = 'sewa/update/$1';
$route['sewa/delete/(:num)'] = 'sewa/delete/$1';