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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/planning/{cruise}', 'CruisePlanningController@index')->name('planning');

Route::prefix('settings')->group(function () {
    Route::resource('venues', 'settings\VenueController');
    Route::resource('users', 'settings\UserController');
});

Route::resource('promotions', 'PromotionsController')->only('index', 'store');

Route::resource('activity', 'ActivityController')->only('index', 'create', 'store');

Route::resource('agent', 'AgentController')->only('index');
