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
        $userValidated = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $userValidated['password'] = Hash::make($userValidated['password']);

        User::create($userValidated);

        return redirect('/login')->with('success', "Registration successfuly! Please login!");
    }
}
