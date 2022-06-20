<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::fallback(function() {
    return redirect('/');
});

Route::get('/', function () {
    return view('home', [
        'active' => "home",
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => "about",
        'title' => "About",
        'name' => "Tanzilal Gummilang",
        'profession' => "Web Developer",
        'image' => "01.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'showPost']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'showPostsWithCategory']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{user:username}', [AuthorController::class, 'showPostsWithAuthor']);