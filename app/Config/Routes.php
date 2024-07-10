<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Login
$routes->get('/', 'Home::index');
$routes->post('login', 'UsuariosController::index');

// Rutas para el controlador CajasController
$routes->get('caja', 'CajasController::index');
$routes->get('caja/create', 'CajasController::create');
$routes->post('caja/store', 'CajasController::store');
$routes->get('caja/edit/(:num)', 'CajasController::edit/$1');
$routes->post('caja/update/(:num)', 'CajasController::update/$1');
$routes->get('caja/delete/(:num)', 'CajasController::delete/$1');
$routes->get('caja/show/(:num)', 'CajasController::show/$1');
$routes->post('caja/search', 'CajasController::search');
$routes->get('cajas/pdf/(:num)', 'CajasController::pdfCaja/$1');



// Rutas para el controlador CajaMovimientosController
$routes->get('cajamovimiento',                'CajaMovimientosController::index');
$routes->get('cajamovimiento/create/(:num)/(:alpha)', 'CajaMovimientosController::create/$1/$2');
$routes->post('cajamovimiento/store',          'CajaMovimientosController::store');
$routes->get('cajamovimiento/edit/(:num)',    'CajaMovimientosController::edit/$1');
$routes->post('cajamovimiento/update/(:num)',  'CajaMovimientosController::update/$1');
$routes->get('cajamovimiento/delete/(:num)',  'CajaMovimientosController::delete/$1');
$routes->get('cajamovimiento/show/(:num)',    'CajaMovimientosController::show/$1');
