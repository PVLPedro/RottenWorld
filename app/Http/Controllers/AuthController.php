<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $messages = [
            'name.required' => 'Insira um Nome de Usuário',

            'password.required' => 'Insira uma Senha',
        ];

        $credentials = $request->validate([
            'name'     => 'required',
            'password' => 'required',
        ], $messages);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withInput()->with('status', 'Nome de Usuário ou Senha incorretos');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
