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
        // Start Product Controller
    Route::group(['prefix'=>'setting', 'as'=>'setting.'], function(){
        Route::group(['prefix'=>'header', 'as'=>'header.'], function(){
            Route::GET('list', [
                'uses'=>'SettingController@headerCreate',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'SettingController@headerUpdate',
                'as'=>'update'
            ]);

        });
        Route::group(['prefix'=>'footer', 'as'=>'footer.'], function(){
            Route::GET('list', [
                'uses'=>'SettingController@footerCreate',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'SettingController@footerUpdate',
                'as'=>'update'
            ]);

        });
    });
    // End Product Controller
    // Start Setting Controller
    Route::group(['prefix'=>'setting', 'as'=>'setting.'], function(){
        Route::group(['prefix'=>'header', 'as'=>'header.'], function(){
            Route::GET('list', [
                'uses'=>'SettingController@headerCreate',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'SettingController@headerUpdate',
                'as'=>'update'
            ]);

        });
        Route::group(['prefix'=>'footer', 'as'=>'footer.'], function(){
            Route::GET('list', [
                'uses'=>'SettingController@footerCreate',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'SettingController@footerUpdate',
                'as'=>'update'
            ]);

        });
    });
    // End Setting Controller
// Start Front Page Controller

    Route::group(['prefix'=>'pages', 'as'=>'pages.'], function(){
        // Start About Us Page
        Route::group(['prefix'=>'about', 'as'=>'about.'], function(){
            Route::GET('list', [
                'uses'=>'AboutUsController@create',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'AboutUsController@update',
                'as'=>'update'
            ]);
        });   
        // End About Us Page
        //Start  Contact Us Page    
        Route::group(['prefix'=>'contact', 'as'=>'contact.'], function(){
            Route::GET('list', [
                'uses'=>'ContactUsController@create',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'ContactUsController@update',
                'as'=>'update'
            ]);
        });
        // End Contact Us Page
        // Start Return Policy Page
        Route::group(['prefix'=>'policy', 'as'=>'policy.'], function(){
            Route::GET('list', [
                'uses'=>'ReturnPolicyController@create',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'ReturnPolicyController@update',
                'as'=>'update'
            ]);
        });
        // End Return Policy Page        
        // Start Return Policy Page
        Route::group(['prefix'=>'termsofcondition', 'as'=>'termsofcondition.'], function(){
            Route::GET('list', [
                'uses'=>'TermsOfConditionController@create',
                'as'=>'list'
            ]);
            Route::POST('update', [
                'uses'=>'TermsOfConditionController@update',
                'as'=>'update'
            ]);
        });
        // End Return Policy Page

    });
    // End Front Page Controller
});

// Backend Route End
