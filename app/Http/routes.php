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
    // ADMIN
    Route::get('admin', 'AdminController@index');
    Route::resource('admin/categories', 'AdminCategoryController');
    Route::resource('admin/product_models', 'AdminProductModelController');
    Route::resource('admin/products', 'AdminProductController');

//    Add other route Here
//    Route::get('/', 'DemoController@index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'CategoriesController');

// PRODUCT
Route::get('products/result', [
    'as' => 'products.search', 'uses' => 'ProductController@search'
]);
Route::get('products/category/{id}', 'ProductController@index');
Route::resource('product_models', 'ProductModelController');
Route::resource('products', 'ProductController'/*, ['except'=>'show']*/);
// END PRODUCT

Route::get('/products-old', 'ProductController@indexOld');
