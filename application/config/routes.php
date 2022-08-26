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
$route['default_controller'] = 'MainController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Admin
$route['admin']                 = 'admin/AuthController';
$route['admin-signin']          = 'admin/AuthController/signin';

// Admin Menu
$route['admin/dashboard']       = 'admin/DashboardController';
$route['admin/books']           = 'admin/BooksController';
$route['admin/users']           = 'admin/UsersController';
$route['admin/subscriptions']   = 'admin/SubscriptionsController';

// Admin Action
$route['admin/new-books']       = 'admin/BooksController/new_books';
$route['admin/add-book']        = 'admin/BooksController/add_book';
$route['admin/edit-book']       = 'admin/BooksController/edit_book';
$route['admin/delete-book']     = 'admin/BooksController/delete_book';

$route['admin/edit-user']       = 'admin/UsersController/edit_user';

// User
$route['home']                  = 'HomeController';
$route['category']              = 'CategoryController';
$route['sign-in']               = 'AuthController';
$route['sign-up']               = 'AuthController/signup';
$route['user-signin']           = 'AuthController/signin_process';
$route['user-signup']           = 'AuthController/signup_process';
$route['sign-out']              = 'AuthController/signout';

$route['book/(:any)']           = 'BookController/index/$1';
$route['search']                = 'CategoryController/search';

$route['subscription']          = 'SubsController';
$route['checkout']              = 'PaymentController';
$route['payment']               = 'PaymentController/payment';