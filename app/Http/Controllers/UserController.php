<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\{
    RegisterRequest
};
use Illuminate\Support\Facades\{
    Auth,
    Hash,
};
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $successMessage = $request->session()->get('auth.success.message');
        return view('auth/login')->with([
            'successMessage' => $successMessage
        ]);
    }

    public function register()
    {
        return view('auth/register');
    }

    public function create(RegisterRequest $request)
    {
        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        return to_route('login')->with([
            'auth.success.message' => 'User created successfully.'
        ]);
    }
}
