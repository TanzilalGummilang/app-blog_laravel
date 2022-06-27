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

    /* public function showPostsWithAuthor(User $user)
    {
        return view('posts', [
            'active' => "authors",
            'title' => "Post By Author : $user->username / $user->name",
            'posts' => $user->posts->load('user', 'category')
        ]);
    } */
}
