<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }


        $userPassword = $user->password;

        if(Hash::check($password, $userPassword)){

            $token = $user->createToken(config('app.name'))->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'user' => $user,
                'token' => $token
            ]);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}
