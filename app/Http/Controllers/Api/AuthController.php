<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Registration logic
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $password = bcrypt($password);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $token = auth()->guard('api')->login($user);

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        // login logic

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            ]);

        $credentials = $request->only('email', 'password');
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'unauthorized'], 401);
        }
        return response()->json(['user' => auth()->guard('api')->user(), 'token' => $token]);
    }

    public function logout(Request $request)
    {
        // Logout logic
        auth()->guard('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function me(Request $request)
    {
        // Return authenticated user
        return response()->json(auth()->guard('api')->user());
    }

    public function refresh(Request $request)
    {
        // Refresh JWT token
        $newToken = auth()->guard('api')->refresh();
        return response()->json(['token' => $newToken]);
    }
}
