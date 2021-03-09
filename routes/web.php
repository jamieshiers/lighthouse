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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('guest', App\Http\Controllers\GuestController::class)->only('index');

Route::resource('gesture', App\Http\Controllers\GestureController::class)->only('index');

Route::resource('dashboard', App\Http\Controllers\DashboardController::class)->only('index');

Route::resource('gesture', App\Http\Controllers\GestureController::class)->only('index');
Route::get('gesture/import', [App\Http\Controllers\GestureController::class, 'import']);

Route::resource('guest', App\Http\Controllers\GuestController::class)->only('index');
Route::get('guest/import', [App\Http\Controllers\GuestController::class, 'import']);

Route::resource('guest-log', App\Http\Controllers\GuestLogController::class)->only('index', 'create');
Route::get('guest-log/save', [App\Http\Controllers\GuestLogController::class, 'save']);
