<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['access360'] = '/welcome/home';
$route['about'] = '/welcome/home';
$route['signage'] = '/welcome/home';
$route['contact'] = '/welcome/home';
$route['experiential'] =  '/welcome/home';
$route['gallery'] = '/welcome/home';
$route['news'] = '/welcome/home';
$route['digitalsignage'] = '/welcome/home';
$route['contact'] = '/welcome/home';
$route['pos'] = '/welcome/home';
$route['testimonials'] = '/welcome/home';
$route['login'] = '/welcome/login';
$route['modular'] = '/welcome/home';
$route['custom'] = '/welcome/home';
$route['outdoor'] = '/welcome/home';
$route['roadshow'] = '/welcome/home';
$route['exhibitions'] = '/welcome/home';
$route['class-descriptions'] = '/welcome/home';
$route['membership'] = '/welcome/home';
$route['what_we_do'] = '/welcome/home';
$route['who_are_we'] = '/welcome/home';
$route['kids-parties'] = '/welcome/home';
$route['fit-kids'] = '/welcome/home';
$route['case-studies'] = '/welcome/home';
$route['latestwork'] = '/welcome/gallery';
$route['portfolio'] = '/welcome/home';
$route['terms'] = '/welcome/home';
$route['404_override'] = '';


/* End of file routes.php */
