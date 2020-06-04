<?php

use App\Http\Controllers\guestLog\guestLogCommentController;


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::prefix('guestlog')->group(function () {
        //Dashboard
        Route::get('/', guestLog\guestLogIndexController::class)->name('guestLog.index');
        //Add New Log
        Route::get('/add', [guestLogCommentController::class, 'create'])->name('guestLog.create');
        Route::get('/show/{boooking_reference}', [guestLogCommentController::class, 'guestdashboard'])->name('guest.show');
        Route::get('/show/{boooking_reference}/add', [guestLogCommentController::class, 'addNewGuestLog'])->name('guestLog.add');
        Route::post('/', [guestLogCommentController::class, 'store'])->name('guestLog.store');
       // Details View
       Route::get('/{log_number}', [guestLogCommentController::class, 'view'])->name('guestLog.view');
       Route::post('/{log_number}/close', [guestLogCommentController::class, 'closeLog'])->name('guestLog.closeLog');
       Route::post('/{log_number}/update', [guestLogCommentController::class, 'update'])->name('guestLog.update');

    });

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

Route::resource('activity', 'ActivityController')->only('index', 'create', 'store');

Route::resource('agent', 'AgentController')->only('index');
