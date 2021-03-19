<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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

//for previuos page
$routes->get('/back', 'PagesController::back');

// Login/Logout
$routes->post('/loginPOST', 'PagesController::loginPOST');
$routes->post('/logout', 'PagesController::logout');

//Pages Routes
$routes->get('/', 'PagesController::index');
$routes->get('/struktur-organisasi', 'PagesController::struktur_organisasi');
$routes->get('/artikel', 'PagesController::artikel');
$routes->get('/pelayanan', 'PagesController::pelayanan');
$routes->get('/faq', 'PagesController::faq');
//End Pages Routes

//Admin Routes
$routes->get('/dashboard', 'AdminController::Dashboard');
$routes->get('/pelayanan-admin', 'AdminController::pelayanan_admin');
$routes->get('/artikel-admin', 'AdminController::artikel_admin');

//POST
//Operator CRUD
$routes->post('/operator_tambah', 'AdminController::OperatorTambah'); //create
$routes->post('/operator_update', 'AdminController::OperatorUpdate'); //update
$routes->post('/operator_delete', 'AdminController::OperatorDelete'); //delete

//Admin CRUD
$routes->post('/admin_update', 'AdminController::AdminUpdate'); //update

//END POST

//End Admin Routes


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}