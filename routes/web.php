<?php

use App\Http\Controllers\ActivatorController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::post('admin/activate-user/{user}', [ActivatorController::class, 'activateUser'])->name('admin.activate-user');
Route::post('admin/deactivate-user/{user}', [ActivatorController::class, 'deactivateUser'])->name('admin.deactivate-user');



