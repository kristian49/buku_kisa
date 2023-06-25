<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->post('tambah_tamu_utama_form', 'Home::tambah_utama_tamu');
$routes->get('login', 'Home::login');
$routes->get('forgot', 'Home::forgot');
$routes->get('reset-password', 'Home::reset');
$routes->match(['get', 'post'], 'PegawaiController/printpdf', 'PegawaiController::printpdf');
$routes->match(['get', 'post'], 'TamuController/printpdf', 'TamuController::printpdf');

$routes->group('', ['filter' => 'login'], function ($routes) {
    $routes->get('register', 'Home::register');
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('input_tamu', 'TamuController::input_tamu');
    $routes->post('tambah_tamu_form', 'TamuController::tambah_tamu');
    $routes->get('tamu', 'TamuController::index');
    $routes->add('tamu', 'TamuController::tambah');
    $routes->add('tamu/edit/(:segment)', 'TamuController::edit/$1');
    $routes->get('tamu/hapus/(:segment)', 'TamuController::hapus/$1');
    $routes->get('pegawai', 'PegawaiController::index');
    $routes->get('register', 'PegawaiController::tambah');
    $routes->add('pegawai/edit/(:segment)', 'PegawaiController::edit/$1');
    $routes->get('pegawai/hapus/(:segment)', 'PegawaiController::hapus/$1');
});

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
