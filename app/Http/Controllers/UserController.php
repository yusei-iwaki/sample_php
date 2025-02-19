<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        $posts = $user->posts()->orderBy('created_at', 'DESC')->get();
        return view('users.show', ['user' => $user, 'posts' => $posts]);
    }
}