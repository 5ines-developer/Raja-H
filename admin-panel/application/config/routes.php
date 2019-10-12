<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['enquiry']               = 'banner/enquiry';
$route['enquiry/(:any)']        = 'banner/enquiry/$1';

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

$route['career']	                =	'career'; 
$route['career/add']	            =	'career/add'; 
$route['career/edit/(:any)']	    =	'career/edit/$1'; 
$route['career/detail/(:any)']	    =	'career/detail/$1'; 
$route['career/delete/(:any)']	    =	'career/delete/$1'; 
$route['career/status/(:any)']	    =	'career/status/$1'; 
$route['career/applications']	    =	'career/applications'; 



 









