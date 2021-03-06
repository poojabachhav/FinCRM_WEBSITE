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
// $route['default_controller'] 	= 'welcome';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

// start here
$route['default_controller'] 		   = 'home';
$route['home'] 						   = 'home/index';
$route['contact-us'] 				   = 'home/contact_us';
$route['request-for-demo'] 		       = 'home/request_for_demo';
$route['dynamic-entity-creation']      = 'home/feature1';
$route['insightful-reports']           = 'home/feature8';
$route['cloud-based-document-manager'] = 'home/feature2';
$route['service-and-support']          = 'home/feature3';
$route['prioritizing-your-security']   = 'home/feature4';
$route['email-and-sms-intelligence']   = 'home/feature5';
$route['client-portal']                = 'home/feature6';
$route['pipeline-management']          = 'home/feature7';
$route['partner']                      = 'home/partner';
$route['pricing']                      = 'home/pricing';
$route['sign-up-page']                 = 'home/sign_up';
$route['load-domain']                  = 'home/sign_in';
$route['sign-in']                      = 'home/login';
$route['industry']                     = 'home/industry';
$route['become-a-partner']             = 'home/become_a_partner';
$route['career']                       = 'home/career';
$route['crm-for-education']            = 'home/crm_for_education';
$route['crm-for-insurance']            = 'home/crm_for_insurance';
$route['crm-for-banks-and-NBFC']       = 'home/crm_for_banks_and_NBFC';
$route['crm-for-business-advisory']    = 'home/crm_for_business_advisory';
$route['crm-for-real-estate']    	   = 'home/crm_for_real_estate';
$route['crm-for-financial-consultant'] = 'home/crm_for_financial_consultant';
$route['crm-for-travel-and-tourism']   = 'home/crm_for_travel_and_tourism';
$route['crm-for-recruitment-consultant']   = 'home/crm_for_recruitment_consultant';
$route['crm-for-hospital-and-healthcare']  = 'home/crm_for_hospital_and_healthcare';
$route['crm-for-auto-dealerships']         = 'home/crm_for_auto_dealerships';
$route['crm-for-Ecommerce']            = 'home/crm_for_Ecommerce';

