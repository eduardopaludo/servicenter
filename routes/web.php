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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1', 'namespace' => 'Api\V1'], function () use ($app) {
    $app->get('partners', 'PartnersController@index');
//    $app->get('restaurants/{id:[0-9]+}', 'RestaurantsController@show');
//    $app->post('restaurants', 'RestaurantsController@store');
//    $app->put('restaurants/{id:[0-9]+}', 'RestaurantsController@update');
//    $app->post('restaurants/{id:[0-9]+}', 'RestaurantsController@update');
//    $app->delete('restaurants/{id:[0-9]+}', 'RestaurantsController@destroy');
//
//
//    $app->post('restaurants/{id:[0-9]+}/address', 'RestaurantsController@address');
//    $app->post('restaurants/{id:[0-9]+}/upload', 'RestaurantsController@upload');
//
//    $app->get('restaurants/{id:[0-9]+}/photos', 'RestaurantPhotosController@index');
//    $app->post('restaurants/photos', 'RestaurantPhotosController@store');
//    $app->delete('restaurants/photos/{id:[0-9]+}', 'RestaurantPhotosController@destroy');
//
//    $app->get('auth/me', 'AuthController@me');
//    $app->post('auth/change-password', 'AuthController@changePassword');
//    $app->post('auth/edit-profile', 'AuthController@editProfile');
//    $app->get('auth/logout', 'AuthController@logout');
});
