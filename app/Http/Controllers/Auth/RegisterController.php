<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'second_name' => 'required|max:255',
            'user_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' =>'required|confirmed',
        ]);

       User::create([
           'first_name' => $request->first_name,
           'second_name' => $request->second_name,
           'user_name' => $request->user_name,
           'email' => $request->email,
           'is_admin' => 0,
           'password' => Hash::make($request->password),
       ]);

       auth()->attempt($request->only('user_name', 'password'));
       
    return redirect()->route('dashboard'); 
    }
}
