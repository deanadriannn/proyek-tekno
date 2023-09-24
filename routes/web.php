<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('blog.home', ['posts' => $posts]);
});

Route::get('/sign-in', function () {
    return view('blog.sign-in');
});
Route::post('/sign-in', [UserController::class, 'login']);

Route::get('/sign-up', function () {
    return view('blog.sign-up');
});
Route::post('/sign-up', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard', function () {
    $posts = [];
    if (auth()->check()) {
        $posts = auth()->user()->usersPosts()->latest()->get();
        $count = auth()->user()->usersPosts()->count();
    }

    return view('blog.dashboard', [
        'posts' => $posts,
        'count' => $count
    ]);
});

Route::get('/new', function () {
    return view('blog.new');
}); 
Route::post('/new', [PostController::class, 'createPost']);

Route::get('/{post}', function (Post $post) {
    $nextPosts = Post::where('user_id', $post->user_id)
        ->where('id', '!=', $post->id)
        ->orderBy('created_at', 'desc')
        ->get();

    return view('blog.single-post', [
        'post' => $post,
        'nextPosts' => $nextPosts
    ]);
});