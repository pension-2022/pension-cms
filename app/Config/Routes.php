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
        'method' => 'get',
        'link' => '/',
        'controller' => 'Pages::index'
    ],
    // Begin Sign-in
    [
        'method' => 'get',
        'link' => '/sign-in',
        'controller' => 'Auth::sign_in'
    ],
    // Begin Sign-up
    [
        'method' => 'get',
        'link' => '/sign-up',
        'controller' => 'Auth::sign_up'
    ],
    // Begin Reset Password
    [
        'method' => 'get',
        'link' => '/forgot-pass',
        'controller' => 'Auth::forgot_pass'
    ],
    // Begin New Password
    [
        'method' => 'get',
        'link' => '/new-pass',
        'controller' => 'Auth::new_pass'
    ],
    // Begin Categories
    [
        'method' => 'get',
        'link' => '/categories',
        'controller' => 'Pages::categories'
    ],
    // Begin Add Categories
    [
        'method' => 'get',
        'link' => '/add-category',
        'controller' => 'Pages::add_category'
    ],
    // Begin Edit Categories
    [
        'method' => 'get',
        'link' => '/edit-category',
        'controller' => 'Pages::edit_category'
    ],
    // Begin Articles
    [
        'method' => 'get',
        'link' => '/articles',
        'controller' => 'Pages::articles'
    ],
    // Begin Add Articles
    [
        'method' => 'get',
        'link' => '/add-article',
        'controller' => 'Pages::add_article'
    ],
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/article-save',
        'controller' => 'PostController::save_articles'
    ],  
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/categories-save',
        'controller' => 'PostController::save_categories'
    ],
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/register-author',
        'controller' => 'PostController::register_author'
    ],  
    // Begin Edit Articles
    [
        'method' => 'get',
        'link' => '/edit-article',
        'controller' => 'Pages::edit_article'
    ],
    // Begin Users List
    [
        'method' => 'get',
        'link' => '/authors',
        'controller' => 'Pages::author_list'
    ],
];

foreach ($pages as $p) {
    if ($p['method'] == 'get') {
        $routes->get($p['link'], $p['controller']);
    }

    if ($p['method'] == 'post') {
        $routes->post($p['link'], $p['controller']);
    }
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