<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
// Отображение формы авторизации
Route::get('login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');

// Обработка отправки формы авторизации
Route::post('login', 'App\Http\Controllers\AuthController@login');

// Выход из системы
Route::post('logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
