<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\ResponseFormatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function  login()
    {
        $email = request()->email;
        $password = request()->password;

        $user = User::where('email', $email)->first();

        if(is_null($user)){
            return ResponseFormatter::error(404, null, [
                'User not found'
            ]);
        }


        $userPassword = $user->password;

        if(Hash::check($password, $userPassword)){

            $token = $user->createToken(config('app.name'))->plainTextToken;

            $data = [
                'user' => $user,
                'token' => $token,
            ];

            return ResponseFormatter::success($data, [
                'Authenticated'
            ]);
        }

        return ResponseFormatter::error(401, null, [
            'Invalid credentials'
        ]);
    }
}
