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

$router->group(['middleware' => 'client.credentials'], function() use ($router) {
    /**
     * Routes for Book Resource
     */
    $router->get('books', 'BookController@index');
    $router->post('books', 'BookController@store');
    $router->get('books/{book}', 'BookController@show');
    $router->patch('books/{book}', 'BookController@update');
    $router->put('books/{book}', 'BookController@update');
    $router->delete('books/{book}', 'BookController@destroy');

    /**
     * Routes for Author Resource
     */
    $router->get('authors', 'AuthorController@index');
    $router->post('authors', 'AuthorController@store');
    $router->get('authors/{author}', 'AuthorController@show');
    $router->patch('authors/{author}', 'AuthorController@update');
    $router->put('authors/{author}', 'AuthorController@update');
    $router->delete('authors/{author}', 'AuthorController@destroy');

    /**
     * Routes for user Resource
     */
    $router->get('users', 'UserController@index');
    $router->post('users', 'UserController@store');
    $router->get('users/{user}', 'UserController@show');
    $router->patch('users/{user}', 'UserController@update');
    $router->put('users/{user}', 'UserController@update');
    $router->delete('users/{user}', 'UserController@destroy');
});

$router->group(['middleware' => 'auth:api'], function() use ($router) {

    $router->get('users/me', 'UserController@me');
});
