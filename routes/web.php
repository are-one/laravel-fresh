<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function (){
    Mail::to('arwanmangidi@gmail.com')->send(new \App\Mail\SendWelcomeMail());
});

Route::get('/rupiah/{number}', function ($number){
    return formatRupiah($number);
});
