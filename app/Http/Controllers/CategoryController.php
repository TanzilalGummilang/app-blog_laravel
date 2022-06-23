<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'active' => "categories",
            'title' => "Post Categories",
            'categories' => Category::all()
        ]);
    }

    /* public function showPostsWithCategory(Category $category)
    {
        return view('posts', [
            'active' => "categories",
            'title' => "Post By Category : $category->name",
            'posts' => $category->posts->load('category', 'user')
        ]);
    } */
}
