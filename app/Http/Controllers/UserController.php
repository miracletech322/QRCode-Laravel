<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function deleteUser(Request $request) {
        User::where('id', $request->id)->delete();
        return redirect()->route('filament.admin.pages.user-manage');
    }
}
