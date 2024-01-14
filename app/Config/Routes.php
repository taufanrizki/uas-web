<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// File: app/Config/Routes.php

$routes->group('surat', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Surat::index'); // Menampilkan daftar surat (index)
    $routes->get('create', 'Surat::create'); // Menampilkan formulir untuk membuat surat (create)
    $routes->post('store', 'Surat::store'); // Menyimpan data surat dari formulir (store)
    $routes->get('edit/(:num)', 'Surat::edit/$1'); // Menampilkan formulir untuk mengedit surat (edit)
    $routes->post('update/(:num)', 'Surat::update/$1'); // Menyimpan data surat yang sudah diubah (update)
    $routes->get('delete/(:num)', 'Surat::delete/$1'); // Menghapus surat (delete)
});

// Kejadian 
$routes->get('kejadian', 'Kejadian::index');
//$routes->get('kejadian/index', 'Kejadian::index');
$routes->get('kejadian/create', 'Kejadian::create');
$routes->post('kejadian/create', 'Kejadian::create');
$routes->get('kejadian/edit/(:any)', 'Kejadian::edit/$1');
$routes->post('kejadian/edit/(:any)', 'Kejadian::edit/$1');
$routes->get('kejadian/delete/(:any)', 'Kejadian::delete/$1');



