<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/(:any)'] 		= 'admin/viewNews/$1';
$route['admin/ucp'] 		= 'admin/ucp';

$route['admin/deleteMainContent'] 	= 'admin/deleteMainContent';

$route['admin/addMainContentPage']  = 'admin/addMainContentPage';
$route['admin/addMainContent'] 		= 'admin/addMainContent';

$route['admin/editMainContentPage'] = 'admin/editMainContentPage';
$route['admin/mainContent'] 		= 'admin/mainContent';

$route['admin/gallery'] 		= 'admin/gallery';
$route['admin/portfolio'] 		= 'admin/portfolio';
$route['admin/article'] 		= 'admin/article';
$route['admin/news'] 			= 'admin/news';
$route['logout'] 				= 'admin/logout';
$route['login'] 				= 'admin/login';
$route['admin'] 				= 'admin';


$route['order'] = 'OrderController';

$route['(:any)'] = 'RootController';
$route['default_controller'] = 'RootController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
