<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'authentication';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

//admin authentication
$route['login'] 				= 'authentication/index'; 			//login view
$route['can-login'] 			= 'authentication/form_validation'; //check credential exist
$route['dashboard'] 			= 'authentication/enter'; 			//open dashboard
$route['logout'] 				= 'authentication/logout'; 			//logout
//forgot password
$route['forgot-password'] 		= 'authentication/forgot_password'; 	//forgot password email check
$route['set-password/(:any)'] 	= 'authentication/add_pass/$1'; 		//forgot password email click
$route['update-password']   	= 'authentication/update_pass'; 		//forgot password email click
//change password
$route['change-password']   	= 'account/index'; 						//forgot password email click
$route['password/change']   	= 'account/password_validation'; 		//forgot password email click
//account settings
$route['profile']   			= 'account/accntsttngs'; 	
$route['profile/update']   		= 'account/updateacnt'; 

//banner
$route['banner/manage']   		= 'banner/index'; 	
$route['banner/add']   			= 'banner/add'; 	
$route['banner/insert']   		= 'banner/insert'; 

//adminuser	
$route['adminuser/manage']   		= 'Adminuser/index'; 	
$route['adminuser/add']   			= 'Adminuser/add'; 	
$route['adminuser/edit/(:any)']  	= 'Adminuser/edit/$1'; 	
$route['adminuser/delete/(:any)']  	= 'Adminuser/delete/$1';

//category
$route['category/manage']   		= 'category/index'; 	
$route['category/add']   			= 'category/add';
$route['category/edit/(:any)']  	= 'category/edit/$1'; 	
$route['category/delete/(:any)']  	= 'category/delete/$1';

//sub category
$route['category/sub-add/(:any)/(:any)']   = 'category/addSub/$1/$2'; 
$route['category/sub-insert']   	= 'category/insertSub'; 
$route['category/sub-edit/(:any)/(:any)/(:any)']  = 'category/editSub/$1/$2/$3'; 
$route['category/sub-delete/(:any)/(:any)/(:any)']  	= 'category/deleteSub/$1/$2/$3';	



///super category
$route['category/super-add/(:any)/(:any)/(:any)']   = 'category/addSuper/$1/$2/$3'; 
$route['category/sup-insert']   	= 'category/insertSup'; 
$route['category/super-view/(:any)/(:any)/(:any)']   = 'category/superview/$1/$2/$3'; 
$route['category/sup-edit/(:any)']  	= 'category/editSup/$1';
$route['category/sup-delete/(:any)/(:any)/(:any)/(:any)']  	= 'category/deleteSup/$1/$2/$3/$4';

//project 
$route['project/manage']   		        = 'project/index';
$route['project/update/(:any)/(:any)']  = 'project/update/$1/$2'; 	



 









