<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Repositories\AuthRepository;
use Hash;
use Illuminate\Auth\AuthenticationException;

class AuthService
{
    /**
     * Create a new class instance.
     */
    protected $authRepository;
    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(array $data)
    {
        return $this->authRepository->register($data);
    }

    public function login(string $email, string $password)
    {
        $user = $this->authRepository->findByEmail($email);
        if (!$user || !Hash::check($password, $user->password)) {
            return null;
        }
        $token = $user->createToken('token')->plainTextToken;
        return [
            'token' => $token,
            'user' => new UserResource($user),
        ];
    }

    public function logout($user)
    {
        return $this->authRepository->logout($user);
    }
}
