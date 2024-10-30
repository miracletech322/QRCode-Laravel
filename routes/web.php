<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect("admin/login");
    // return view('welcome');
});

Route::post('/user-delete', [UserController::class, 'deleteUser']);
