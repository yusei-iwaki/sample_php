<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $posts = $request->user()->posts()->orderBy('created_at', 'DESC')->get();
        return view('dashboard', ['user' => auth()->user(), 'posts' => $posts]);
    }
}