<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/welcome', function (Request $request) {
    return response()->json([
        'message' => 'Welcome to the API',
        'app_name' => config('app.name'),
    ]);
});

Route::post('/welcome', function (Request $request){
   return response()->json([
       'app_name' => config('app.name'),
   ]);
});
