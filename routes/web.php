<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;

// Отображение главной
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('contact',function (){
    return view('contact');
})->name('contact');
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

