<?php

namespace App\Http\Controllers\Api;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserLoginRequest;
use App\Http\Requests\Api\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
        $data = $request->except('_token');
        $data['role'] = Roles::ADMIN;
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        $token = $user->createToken('tox_token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response()->successWithData(trans('responses.success.user.registered'), $response);
    }

    public function login(UserLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

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
