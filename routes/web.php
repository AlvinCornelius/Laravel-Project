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

Route::middleware('auth')->group(function()
{
    Route::get('/', function ()
    {
        return view('index');
    });
    Route::get('/','BookController@ReadBook');
    Route::get('/collection','BookController@ReadBook');
    Route::get('/create','BookController@CreateView');
    Route::post('/create','BookController@CreateBook');
    Route::get('/profile','BookController@ReadUser');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

