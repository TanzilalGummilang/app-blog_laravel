<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            'title' => "Author",
            'authors' => User::all()
        ]);
    }

    public function showPostsWithAuthor(User $user)
    {
        return view('author', [
            'title' => $user->username,
            'posts' => $user->posts
        ]);
    }
}
