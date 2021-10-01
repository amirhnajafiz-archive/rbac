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
    $routes = \Illuminate\Support\Facades\Route::getRoutes()->getRoutes();
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])
    ->middleware(['auth'])
    ->name('all.user');

Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'show'])
    ->middleware(['auth', 'can:show.user,user'])
    ->name('show.user');

Route::get('/toggle/{user}', [\App\Http\Controllers\UserController::class, 'toggle'])
    ->middleware(['auth', 'can:all.user'])
    ->name('toggle');

require __DIR__ . '/auth.php';
