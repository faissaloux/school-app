<?php

namespace App\Http\Controllers\Api;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $authorizedRoles = [
        Roles::TEACHER,
        Roles::PARENT,
    ];

    public function login(UserLoginRequest $request)
    {
        $user = User::where('email', $request->email)
            ->whereIn('role', $this->authorizedRoles)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->errorMessage(trans('responses.errors.wrong_credentials'));
        }

        $token = $user->createToken('tox_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response()->successWithData(trans('responses.success.user.logged_in'), $response);
    }

    public function profile()
    {
        $auth = auth()->user();

        return response()->data($auth);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->success(trans('responses.success.user.logged_out'));
    }
}
