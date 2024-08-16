<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    final public function login(): JsonResponse
    {
        request()->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $user = User::where('username', request()->username)->first();

        if (! $user || ! Hash::check(request()->password, $user->password)) {
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401);
        }

        return response()->json([
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ], 201);
    }

    final public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out'
        ]);
    }
}