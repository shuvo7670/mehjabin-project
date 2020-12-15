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
    });
    // End Slider Controller
});

// Backend Route End
