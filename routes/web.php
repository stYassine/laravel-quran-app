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
    return view('welcome');
});



//////////////////////////////////////////////
/// Admin
//////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    
    /// Dashboard
    Route::get('/', [
        'uses' => 'AdminController@dashboard',
        'as' => 'dashboard'
    ]);
    
    
    ///////////////////////
    /// Reciters
    ///////////////////////
    Route::resource('/reciters', 'ReciterController');
    
    ///////////////////////
    /// Audios
    ///////////////////////
    Route::resource('/audios', 'AudioController');
    
});


//////////////////////////////////////////////
/// Public
//////////////////////////////////////////////
/// home page
Route::get('/', [
    'uses' => 'FrontController@index',
    'as' => 'index'
]);

/// single reciter
Route::get('/single/{id}', [
    'uses' => 'FrontController@single',
    'as' => 'single'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
