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
Route::get('/allRoles', [App\Http\Controllers\RoleController::class, 'getAllRoles'])->name('getAllRoles');
Route::post('/roles', [App\Http\Controllers\RoleController::class, 'addRole'])->name('addRole');
Route::get('/roles', [App\Http\Controllers\RoleController::class, 'roleForm'])->name('roleForm');
Route::get('/permissions', [App\Http\Controllers\RoleController::class, 'createPermissions'])->name('createPermissions');



// Administration route
Route::get('/userslist', [App\Http\Controllers\AdminController::class, 'index'])->name('userslist');
Route::get('/userslistboard', [App\Http\Controllers\AdminController::class, 'userslistboard'])->name('userslistboard');

Route::get('/editUser/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('editUser');
Route::post('/updateUser', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('updateUser');
Route::get('/initializePassword', [App\Http\Controllers\AdminController::class, 'initializePassword'])->name('initializePassword');
Route::post('/initializePassword', [App\Http\Controllers\AdminController::class, 'initializePasswordSave'])->name('initializePasswordSave');
Route::get('/changePassword', [App\Http\Controllers\AdminController::class, 'changePassword'])->name('changePassword');


// File Maintainance
Route::get('/newsession', [App\Http\Controllers\FileController::class, 'newSession'])->name('newSession');
Route::get('/closesession', [App\Http\Controllers\FileController::class, 'closeSession'])->name('closeSession');

// Data Processing Module
Route::get('/enteryear', [App\Http\Controllers\DataController::class, 'enterYear'])->name('enterYear');
Route::get('/studentDetail', [App\Http\Controllers\DataController::class, 'enterStudentDetails'])->name('enterStudentDetails');

//Set  Access Module



Route::view('/punjabAccess', 'access_module.setPunjabLevelAccess');
Route::view('/sessionAccess', 'access_module.setSessionLevelAccess');


// Delete Selected
Route::post('/deleteSelected', [App\Http\Controllers\ManageController::class, 'deleteSelected'])->name('deleteSelected');


// Change Status
Route::get('/changeStatusUser', [App\Http\Controllers\ManageController::class, 'changeStatusUser'])->name('changeStatusUser');
Route::get('/changeStatusRole', [App\Http\Controllers\ManageController::class, 'changeStatusRole'])->name('changeStatusRole');
