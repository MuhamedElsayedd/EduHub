<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function register(RegisterRequest $request, AuthService $authService)
    {
        $data = $request->validated();
        $result = $authService->register($data);

        return ApiResponse::success([
            'user' => $result['user'],
            'token' => $result['token'],
            'message' => 'User registered successfully',
        ]);
    }


    public function login(LoginRequest $request, AuthService $authService)
    {
        $data = $request->validated();
        $result = $authService->login($data);

        if ($result['success']) {
            return ApiResponse::success([
                'user' => $result['user'],
                'token' => $result['token'],
                'message' => 'User logged in successfully',
            ]);
        } else {
            return ApiResponse::error($result['message'], $result['status']);
        }
    }


    public function myProfile(Request $request)
    {
        return ApiResponse::success([
            'user' => $request->user(),
            'message' => 'User profile fetched successfully',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ApiResponse::success([
            'message' => 'Logged out successfully',
        ]);
    }
}
