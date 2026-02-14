<?php

namespace App\Services;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function register(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        $role = $data['role'] ?? 'student';
        if (Role::where('name', $role)->exists()) {
            $user->assignRole($role);
        } else {
            $user->assignRole('student');
        }

        $token = $user->createToken('api')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }

    public function login(array $data)
    {
        if (!Auth::attempt($data)) {
            return [
                'success' => false,
                'message' => 'Invalid credentials',
                'status' => 401
            ];
        }

        /** @var User $user */
        $user = Auth::user();
        $token = $user->createToken('api')->plainTextToken;

        return [
            'success' => true,
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer'
        ];
    }
}
