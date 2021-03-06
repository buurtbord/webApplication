<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('plannen', function () {
    return view('pagina.plannen');
});

Route::auth();

Route::get('/home', 'PlansController@index');


Route::get('/plans', 'PlansController@index');

Route::get('plans/{plan}', 'PlansController@show');

Route::get('plans/{plan}/opinions', 'OpinionsController@show');

Route::get('users/{user}', 'UsersController@user');

Route::get('users', 'UsersController@index');

//




