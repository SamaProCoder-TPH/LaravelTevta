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

// Route::get('/', function () {
//     return view('Dashboard');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage']);

// Roles
Route::post('/roles', [App\Http\Controllers\RoleController::class, 'addRole'])->name('addRole');
Route::get('/roles', [App\Http\Controllers\RoleController::class, 'roleForm'])->name('roleForm');
Route::get('/permissions', [App\Http\Controllers\RoleController::class, 'createPermissions'])->name('createPermissions');



// Administration route
Route::get('/userslist', [App\Http\Controllers\AdminController::class, 'index'])->name('userslist');
Route::get('/editUser/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('editUser');
Route::post('/updateUser', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('updateUser');
Route::get('/initializePassword', [App\Http\Controllers\AdminController::class, 'initializePassword'])->name('initializePassword');
Route::post('/initializePasswordSave', [App\Http\Controllers\AdminController::class, 'initializePasswordSave'])->name('initializePasswordSave');




