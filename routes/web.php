<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAccountController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource("/UserAccount", UserAccountController::class);