<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $posts = Post::withCount('comments')->with('user')->latest('id')->get();

        return view('dashboard', compact('posts'));
    }

    public function userList()
    {
        $users = User::withCount('posts')->where('is_admin','!=',1)->latest('id')->get();
        $current_user = User::withCount('posts')->find(auth()->user()->id);
        // dd($users);
        return view('user.list', compact('users'));
    }

    public function userprofile()
    {
        $current_user = User::withCount('posts')->find(auth()->user()->id);
        // dd($users);
        return view('user.profile', compact('current_user'));
    }
}
