<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact-us'] = 'home/contact';
$route['thank-you']  = 'home/thank_you';
$route['sitemap']    = 'home/sitemap';
$route['career']     = 'home/career';

$route['projects/(:any)']     = 'projects/index/$1';

