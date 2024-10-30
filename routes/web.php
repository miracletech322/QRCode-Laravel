<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QRController;

Route::get('/', function () {
    return redirect("admin/login");
    // return view('welcome');
});

Route::post('/user-delete', [UserController::class, 'deleteUser'])->name("user.delete");
Route::post('/create-qr', [QRController::class, 'createCode'])->name('qrcode.create');
Route::post('/delete-qr', [QRController::class, 'deleteCode'])->name('qrcode.delete');
Route::get('/qrcode/{uuid}', [QRController::class, 'showDetail'])->name('qrcode.detail');
