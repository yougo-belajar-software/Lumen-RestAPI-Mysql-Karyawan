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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/', function() {
        return response()->json(['status' => 200, 'message' => 'Hello World from Lumen RESTful API']);
    });
    
    $router->post('movie', 'MovieController@create');
    $router->get('movie/{id}/review', 'MovieController@showReview');
    $router->get('movie/{id}', 'MovieController@showOne');
    $router->get('movie', 'MovieController@showAll');
    $router->put('movie/{id}', 'MovieController@update');
    $router->delete('movie/{id}', 'MovieController@delete');

    $router->post('review', 'ReviewController@create');
    $router->get('review/{id}', 'ReviewController@showOne');
    $router->get('review', 'ReviewController@showAll');
    $router->put('review/{id}', 'ReviewController@update');
    $router->delete('review/{id}', 'ReviewController@delete');

    $router->post('signup', 'UserController@signup');
    $router->post('signin', 'UserController@signin');
    $router->get('user/{id}', 'UserController@show');
    $router->put('user/{id}', 'UserController@update');
    $router->delete('user/{id}', 'UserController@delete');
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
