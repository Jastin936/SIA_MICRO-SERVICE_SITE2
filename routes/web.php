<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
});

// more simple routes
$router->get('/users', 'UserController@index'); // Get all user records
$router->post('/users', 'UserController@addUser'); // Create new user
$router->get('/users/{id}', 'UserController@show'); // Get user by ID
$router->put('/users/{id}', 'UserController@update'); // Update user record
$router->patch('/users/{id}', 'UserController@update'); // Update user record (partial)
$router->delete('/users/{id}', 'UserController@delete'); // Delete user


//userjob routes
$router->get('/usersjob', 'UserJobController@index');        // Get all user jobs
$router->get('/userjob/{id}', 'UserJobController@show');     // Get a single user job by ID