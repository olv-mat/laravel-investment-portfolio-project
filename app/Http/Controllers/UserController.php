<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\{
    RegisterRequest,
    LoginRequest
};
use Illuminate\Support\Facades\{
    Auth,
    Hash
};

class UserController extends Controller
{
    public function loginView()
    {
        return view('auth/login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['login' => 'Invalid Credentials.']);
        }
        return to_route('dashboard');
    }
    
    public function logout()
    {
        Auth::logout();
        return to_route('dashboard');
    }

    public function registerView()
    {
        return view('auth/register');
    }

    public function register(RegisterRequest $request)
    {
        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        Auth::login($user);
        return to_route('dashboard');
    }
}
