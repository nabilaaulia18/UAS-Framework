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

// Login or Register
Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [\App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [\App\Http\Controllers\Auth\AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

// Content
Route::get('apply', [\App\Http\Controllers\ContentController::class, 'apply'])->name('apply');
Route::post('/store-form-apply', [\App\Http\Controllers\ContentController::class, 'storeapply']);
Route::get('letter', [\App\Http\Controllers\ContentController::class, 'letter'])->name('letter');
Route::get('report', [\App\Http\Controllers\ContentController::class, 'report'])->name('report');
Route::post('/store-form-report', [\App\Http\Controllers\ContentController::class, 'storereport']);
