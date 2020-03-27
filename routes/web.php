<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// php -S localhost:8000 -t public

$router->get('/', function() {
    return response()->json(['status' => 200, 'message' => 'Hello World from Lumen RESTful API']);
});

$router->post('karyawan', 'KaryawanController@create');
$router->get('karyawan/{id}', 'KaryawanController@showOne');
$router->get('karyawan', 'KaryawanController@showAll');
$router->put('karyawan/{id}', 'KaryawanController@update');
$router->delete('karyawan/{id}', 'KaryawanController@delete');
