<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('dashboard');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// All Pages

$pages = [
    // Begin Home
    [
        'link' => '/',
        'controller' => 'Pages::index'
    ],
    // End Home
    // 
    // Begin Dashboards
    [
        'link' => '/dashboards/ecommerce',
        'controller' => 'Pages::ecommerce'
    ],
    // End Dashboards
    // 
    // Begin Sign-in
    [
        'link' => '/sign-in',
        'controller' => 'Auth::sign_in'
    ],
    // End Sign-in
    // 
    // Begin Sign-up
    [
        'link' => '/sign-up',
        'controller' => 'Auth::sign_up'
    ],
    // End Sig-up
    // 
    // Begin Reset Password
    [
        'link' => '/forgot-pass',
        'controller' => 'Auth::forgot_pass'
    ],
    // End Reset Password
    // 
    // Begin New Password
    [
        'link' => '/new-pass',
        'controller' => 'Auth::new_pass'
    ],
    // End New Password
    // 
    // Begin Categories
    [
        'link' => '/categories',
        'controller' => 'pages::categories'
    ],
    // End Categories
    // 
    // Begin Add Categories
    [
        'link' => '/add-category',
        'controller' => 'pages::add_category'
    ],
    // End Add Categories
    // 
    // Begin Edit Categories
    [
        'link' => '/edit-category',
        'controller' => 'pages::edit_category'
    ],
    // End Edit Categories
    // 
    // Begin Articles
    [
        'link' => '/articles',
        'controller' => 'pages::articles'
    ],
    // End Articles
    // 
    // Begin Add Articles
    [
        'link' => '/add-article',
        'controller' => 'pages::add_article'
    ],
    // End Add Articles
    // 
    // Begin Edit Articles
    [
        'link' => '/edit-article',
        'controller' => 'pages::edit_article'
    ],
    // End Edit Articles
];

foreach ($pages as $p) {
    $routes->get($p['link'], $p['controller']);
};

// $routes->group('auth', ['namespace' => 'IonAuth\Controllers'], function ($routes) {
//     $routes->add('login', 'Auth::login');
//     $routes->get('logout', 'Auth::logout');
//     $routes->add('forgot_password', 'Auth::forgot_password');
// $routes->get('/', 'Auth::index');
// $routes->add('create_user', 'Auth::create_user');
// $routes->add('edit_user/(:num)', 'Auth::edit_user/$1');
// $routes->add('create_group', 'Auth::create_group');
// $routes->get('activate/(:num)', 'Auth::activate/$1');
// $routes->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
// $routes->add('deactivate/(:num)', 'Auth::deactivate/$1');
// $routes->get('reset_password/(:hash)', 'Auth::reset_password/$1');
// $routes->post('reset_password/(:hash)', 'Auth::reset_password/$1');
// ...
// });

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}