<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['articles/create'] = 'articles/create';
$route['articles/update'] = 'articles/update';
$route['articles/(:any)'] = 'articles/view/$1';
$route['articles'] = 'articles/index';
$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/articles/(:any)'] = 'categories/articles/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
