<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'active' => "register",
            'title' => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $user['password'] = Hash::make($user['password']);

        User::create($user);

        return redirect('/login')->with('success', "Registration successfuly! Please login!");
    }
}
