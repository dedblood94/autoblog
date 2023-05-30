<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
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
// Отображение главной
Route::get('/', function () {
    return view('home');
})->name('home');
// Отображение формы авторизации
Route::get('login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');

// Обработка отправки формы авторизации
Route::post('login', 'App\Http\Controllers\AuthController@login');

// Выход из системы
Route::post('logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
//Отображение поиска
Route::get('search','App\Http\Controllers\Search@index')->name('search');
//Отображение статей
Route::get('articles', [ArticlesController::class, 'index'])->name('articles');

