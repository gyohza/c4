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

$router->get('/movies/upcoming', 'MovieController@upcoming');
$router->get('/movies/top-rated', 'MovieController@topRated');
$router->get('/movies/{movieId}', 'MovieController@show');

$router->get('/genres', 'GenreController@index');
$router->get('/genres/{genreId}', 'GenreController@show');