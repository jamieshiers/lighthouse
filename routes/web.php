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


// Protected Routes
Route::middleware('auth')->group(function () {

    Route::prefix('settings')->group(function () {
        // Venues Group Settings
        Route::get('venues', 'settings\VenueController@index')->name('venues.index');
        Route::get('venues/{id}/edit', 'settings\VenueController@edit')->name('venues.edit');
    });

    Route::livewire('/planning/{cruise}', 'planning.planner')->name('planning');
});


Route::resource('promotions', 'PromotionsController')->only('index', 'store');

Route::resource('activity', 'ActivityController')->only('index', 'create', 'store');

Route::resource('agent', 'AgentController')->only('index');
