<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request, User $user)
    {
        $messages = [
            'name.required' => 'Insira um Nome de Usuário',
            'name.unique'   => 'Este Nome de Usuário já está em uso',
            'name.min'      => 'Nome de Usuário deve ter de 3 a 25 dígitos',
            'name.max'      => 'Nome de Usuário deve ter de 3 a 25 dígitos',

            'password.required' => 'Insira uma Senha',
            'password.min'      => 'Senha deve ter de 6 a 20 dígitos',
            'password.max'      => 'Senha deve ter de 6 a 20 dígitos',
        ];

        $validated = $request->validate([
            'name'     => 'required|min:3|max:25|unique:users,name',
            'password' => 'required|min:6|max:20',
            'role'     => 'required|in:mestre,jogador',
            'session'  => 'required|size:5',
        ], $messages);

        $user = User::create([
            'name'     => $validated['name'],
            'password' => Hash::make($validated['password']),
            'email'    => '@' . $validated['name'],
            'role'     => $validated['role'],
            'session'  => $validated['session'],
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $messages = [
            'name.required' => 'Insira um Nome de Usuário',
            'name.unique'   => 'Este Nome de Usuário já está em uso',
            'name.min'      => 'Nome de Usuário deve ter de 3 a 25 dígitos',
            'name.max'      => 'Nome de Usuário deve ter de 3 a 25 dígitos',

            'password.required' => 'Digite uma Senha',
            'password.confirmed' => 'Confirme a Senha',
            'password.min'      => 'Senha deve ter de 6 a 20 dígitos',
            'password.max'      => 'Senha deve ter de 6 a 20 dígitos',
        ];

        $validated = $request->validate([
            'name' => [
                'required',
                'min:3',
                'max:25',
                'unique:users,name,' . $user->id
            ],
            'role'     => 'required|in:mestre,jogador',
            'password' => 'nullable|min:6|max:20|confirmed',
        ], $messages);

        $data = [
            'name' => $validated['name'],
            'role' => $validated['role'],
        ];

        if (!empty($validated['password'])) {

            $data['password'] = Hash::make($validated['password']);
        }

        $user->update($data);

        return back()->with('success', 'Perfil atualizado!');
    }
}
