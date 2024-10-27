<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('users.index', ['users' => $users]);
    }
}
