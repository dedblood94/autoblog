<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLoginForm(){
        return view('auth.login');
    }
    /**
     * login method
     * @param Request $request
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Авторизация прошла успешно
            return redirect()->intended('/home');
        }

        // Ошибка авторизации
        return back()->withErrors([
            'email' => 'Неверный email или пароль',
        ]);
    }
}
