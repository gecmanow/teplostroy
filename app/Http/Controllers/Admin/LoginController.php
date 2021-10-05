<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Форма входа в личный кабинет
     */
    public function login() {
        return view('admin.pages.login');
    }

    /**
     * Аутентификация пользователя
     */
    public function authenticate(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()
                ->route('admin.admin')
                ->with('success', 'Вы успешно вошли в личный кабинет');
        }

        return redirect()
            ->route('admin.login')
            ->withErrors('Неверный логин или пароль');
    }

    /**
     * Выход из личного кабинета
     */
    public function logout() {
        Auth::logout();
        return redirect()
            ->route('admin.login')
            ->with('success', 'Вы вышли из личного кабинета');
    }
}
