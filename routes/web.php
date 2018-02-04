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
    $app->get('partners/{id:[0-9]+}', 'PartnersController@show');
    $app->post('partners', 'PartnersController@store');
    $app->put('partners/{id:[0-9]+}', 'PartnersController@update');
    $app->post('partners/{id:[0-9]+}', 'PartnersController@update');
    $app->delete('partners/{id:[0-9]+}', 'PartnersController@destroy');


    $app->post('partners/{id:[0-9]+}/address', 'PartnersController@address');
    $app->post('partners/{id:[0-9]+}/upload', 'PartnersController@upload');

    $app->get('partners/{id:[0-9]+}/photos', 'PartnersPhotosController@index');
    $app->post('partners/photos', 'PartnersPhotosController@store');
    $app->delete('partners/photos/{id:[0-9]+}', 'PartnersPhotosController@destroy');

    $app->get('auth/me', 'AuthController@me');
    $app->post('auth/change-password', 'AuthController@changePassword');
    $app->post('auth/edit-profile', 'AuthController@editProfile');
    $app->get('auth/logout', 'AuthController@logout');
});
