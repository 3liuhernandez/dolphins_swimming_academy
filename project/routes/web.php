<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'home_page'])->name('home');
Route::get('home', [PageController::class, 'home_page'])->name('home.index');

Route::prefix('auth')->middleware(['web'])->group( function() {
    Route::get('login', [PageController::class, 'login'])->name('login');
    // validacion de login
    Route::post('login', [LoginController::class, 'check_login'])->name('login.validate');
    Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');

    // login by token
    Route::get('registro', [PageController::class, 'register'])->name('register');
    // validacion de registro
    Route::post('registro', [UserController::class, 'register_validation'])->name('register.store');
});

Route::prefix("admin")->group( function() {

    Route::prefix('auth')->middleware(['web'])->group( function() {
        Route::get('login', [AdminPageController::class, 'login'])->name('admin.login');
        Route::post('login', [AdminLoginController::class, 'check_login'])->name('admin.login.validate');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });

    Route::middleware("auth_admin")->group( function() {
        Route::get('/', [AdminPageController::class, 'home'])->name('admin');
        Route::get('/dashboard', [AdminPageController::class, 'home'])->name('admin.dashboard');
        Route::get('/home', [AdminPageController::class, 'home'])->name('admin.home');

        Route::get('/students', [AdminPageController::class, 'home'])->name('students');
    });

});