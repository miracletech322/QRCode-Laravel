<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\UserManage;

Route::get('/', function () {
    return redirect("admin/login");
    // return view('welcome');
});
