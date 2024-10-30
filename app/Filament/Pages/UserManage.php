<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\User;

class UserManage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'User Management';
    protected static ?string $slug = 'user-manage';
    protected static string $view = 'filament.pages.user-manage';

    public function getUsers()
    {
        return User::all();
    }
    public function deleteuser($id)
    {
        dd('Are you sure you want to delete this user?');
        return "success";
    }
}
