<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $posts = User::all()->sortByDesc('updated_at');
        $posts = User::all();
        return view('admin.user.index', ['posts' => $posts]);
    }
}
