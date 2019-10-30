<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact-us'] = 'home/contact';
$route['thank-you']  = 'home/thank_you';
$route['sitemap']    = 'home/sitemap';
$route['career']     = 'home/career';
$route['about-us']   = 'home/about';
$route['referral-bonus']   = 'home/refer_bonus';


$route['real-estate-updates']	= 'home/real_estate';


$route['projects/(:any)']  = 'projects/index/$1';
$route['project/(:any)']   = 'projects/projectList/$1';

$route['project-enquiry']	= 'projects/contact';





