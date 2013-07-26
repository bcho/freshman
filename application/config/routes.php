<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2013, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

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
| There are two reserved routes:
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
*/

$route['default_controller'] = 'front/home';
$route['404_override'] = 'errors/not_found';

/* backend routes */
$route['backend/login'] = 'backend/user/login';
$route['backend/logout'] = 'backend/user/logout';
$route['backend/deactive'] = 'backend/user/deactive';

$route['backend/self/update'] = 'backend/dashboard/self_update';
$route['backend/user/create'] = 'backend/admin_dashboard/user_create';
$route['backend/user/(:num)/update'] = 'backend/admin_dashboard/user_edit/$1';
$route['backend/users'] = 'backend/admin_dashboard/users';

$route['backend/category/create'] = 'backend/admin_dashboard/category_create';
$route['backend/category/(:num)/update'] = 'backend/admin_dashboard/category_edit/$1';
$route['backend/category/(:num)/remove'] = 'backend/admin_dashboard/category_remove/$1';
$route['backend/categories'] = 'backend/admin_dashboard/categories';

$route['backend/posts'] = 'backend/dashboard/posts';
$route['backend/post/(:num)'] = 'backend/post/edit/$1';
$route['backend/post/create'] = 'backend/post/create';
$route['backend/post/(:num)/publish'] = 'backend/post/publish/$1';
$route['backend/post/(:num)/remove'] = 'backend/post/remove/$1';
$route['backend/post/autosave'] = 'backend/post/autosave';
$route['backend/post/tags'] = 'backend/post/get_tags';
$route['backend/post/campus'] = 'backend/post/get_campus';

$route['backend/file/upload'] = 'backend/file_upload/save';

$route['backend'] = 'backend/dashboard/index';
$route['backend/admin'] = 'backend/admin_dashboard/index';

/* frontend route */
$route['/'] = 'front/home/index';
$route['/home'] = 'front/home/index';
$route['p/(:num)'] = 'front/post/post/$1';
$route['c/(:num)'] = 'front/category/category/$1';
$route['c/all'] = 'front/category/all';
$route['map'] = 'front/map/index';

/* json_api route */
$route['json/p/(:num)'] = 'front/post/json_post/$1';
$route['json/c/(:num)'] = 'front/category/json_category/$1';

/* test route */
$route['/test'] = 'test/index';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
