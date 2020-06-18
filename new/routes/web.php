<?php

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
    return redirect()->intended('/ka');
});
Route::get('/ka', 'Front\AboutController@index');
Route::get('/en', 'Front\AboutController@index');
Route::post('/sendmessage', 'Front\SendEmailController@store');






Route::prefix('admin')->group(function (){
    //protected route middleware
    Route::middleware('auth:admin')->group(function (){
        Route::get('/','Admin\AboutController@main');

        Route::resource('/about','Admin\AboutController');
        Route::resource('/slider','Admin\SliderController');
        Route::resource('/partner','Admin\PartnerController');
        Route::resource('/advantage','Admin\AdvantageController');
    
        //Logout
        Route::get('/logout','Admin\AdminUserController@logout');




    });


    Route::get('/login', 'Admin\AdminUserController@index');
    Route::post('/login', 'Admin\AdminUserController@store');
});