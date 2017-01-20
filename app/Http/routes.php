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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'DemoController@index');

// Middleware Demo
Route::group(['middleware' => 'roles', 'roles' => ['Admin']], function () {
    Route::get('/demo', function ()    {
        return 'only admin can view this page';
    });

//    Add other route Here
//    Route::get('/', 'DemoController@index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoriesController');

