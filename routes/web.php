<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

// Frontend Route Statrt
Route::get('category/product','Frontend\PageController@shoeCategoryProductPage');

// Frontend Route End






// Backend Route Start
Route::group(['prefix'=>'backend', 'as'=>'backend.', 'namespace'=>'Backend','middleware' => 'auth'], function(){

    // Start Slider Controller
    Route::group(['prefix'=>'slider', 'as'=>'slider.'], function(){
        Route::get('list', [
            'uses'=>'SliderController@create',
            'as'=>'list'
        ]);
        Route::POST('add', [
            'uses'=>'SliderController@store',
            'as'=>'add'
        ]);
        Route::POST('update', [
            'uses'=>'SliderController@update',
            'as'=>'update'
        ]);
        Route::GET('delete', [
            'uses'=>'SliderController@destroy',
            'as'=>'delete'
        ]);
    });
    // End Slider Controller

    // Start Category Controller
    Route::group(['prefix'=>'category', 'as'=>'category.'], function(){
        Route::get('list', [
            'uses'=>'CategoryController@create',
            'as'=>'list'
        ]);
        Route::POST('add', [
            'uses'=>'CategoryController@store',
            'as'=>'add'
        ]);
        Route::POST('update', [
            'uses'=>'CategoryController@update',
            'as'=>'update'
        ]);
        Route::GET('delete', [
            'uses'=>'CategoryController@destroy',
            'as'=>'delete'
        ]);
    });
    // End Category Controller
    // Start Product Controller
    Route::group(['prefix'=>'product', 'as'=>'product.'], function(){
        Route::GET('list', [
            'uses'=>'ProductController@create',
            'as'=>'list'
        ]);
        Route::POST('add', [
            'uses'=>'ProductController@store',
            'as'=>'add'
        ]);
        Route::GET('edit', [
            'uses'=>'ProductController@edit',
            'as'=>'edit'
        ]);
        Route::POST('update', [
            'uses'=>'ProductController@update',
            'as'=>'update'
        ]);
        Route::GET('delete', [
            'uses'=>'ProductController@destroy',
            'as'=>'delete'
        ]);
    });
    // End Product Controller
});

// Backend Route End
