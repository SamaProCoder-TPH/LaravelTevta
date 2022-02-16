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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');

// Roles
Route::post('/roles', [App\Http\Controllers\RoleController::class, 'addRole'])->name('addRole');
Route::get('/roles', [App\Http\Controllers\RoleController::class, 'roleForm'])->name('roleForm');
//Set Access

Route::get('/access-punjab-level', [App\Http\Controllers\SetAccessPunjabLevelController::class, 'AccessPunjabLevel'])->name('punjabLevel');
Route::post('/access_punjab', [App\Http\Controllers\SetAccessPunjabLevelController::class, 'access_punjab'])->name('access_punjab');