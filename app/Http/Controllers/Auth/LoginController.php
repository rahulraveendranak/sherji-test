<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    { 
        return view('auth.login');
    }

    public function store(Request $request)
    {  
        $this->validate($request, [
            'user_name' => 'required',
            'password' =>'required',
        ]); 

        if (!auth()->attempt($request->only('user_name', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login details');
        }
       
        return redirect()->route('dashboard');
    }
}
