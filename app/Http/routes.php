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
//Route::group(['middleware' => 'roles', 'roles' => ['Admin']], function () {
    Route::get('/demo', function ()    {
        return 'only admin can view this page';
    });
    // ADMIN
    Route::get('admin', 'AdminController@index');
    Route::resource('admin/categories', 'AdminCategoryController');
    Route::resource('admin/product_models', 'AdminProductModelController');
    Route::get('admin/products/add_stock/{product?}', [
        'as' => 'admin.products.add_stock',
        'uses' => 'AdminProductController@AddStock'
    ]);

//    Mutasi Route
    Route::get('admin/product_mutation/{productCode?}', [
        'as' => 'admin.product_mutation.show',
        'uses' => 'ProductMutationController@show'
    ]);
    Route::post('admin/product_mutation', [
        'as' => 'admin.product_mutation.store',
        'uses' => 'ProductMutationController@store'
    ]);

//    Route::post('admin/products', [
//        'as' => 'admin.products.store',
//        'uses' => 'AdminProductController@store'
//    ]);
    Route::resource('admin/products', 'AdminProductController');
    Route::resource('admin/master_sizes', 'AdminMasterSizeController');

//    Add other route Here
//    Route::get('/', 'DemoController@index');
//});

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
