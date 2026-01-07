<?php

use App\Http\Controllers\API\AuthenticationController;
use App\ResponseFormatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return ResponseFormatter::success($request->user());
})->middleware('auth:sanctum');

Route::post('login', [AuthenticationController::class, 'login']);

Route::get('/welcome', function (Request $request) {
    return response()->json([
        'message' => 'Welcome to the API',
        'app_name' => config('app.name'),
    ]);
});

Route::post('/welcome', function (Request $request){
   return response()->json([
       'message' => 'Welcome to the API',
       'app_name' => config('app.name'),
   ]);
});
