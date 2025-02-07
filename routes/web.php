<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Noka', 'title' => 'About']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search','category','author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function(User $user) {
    // $posts = $user->posts->load('category','author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{kategori:slug}', function(Category $kategori) {
    // $posts = $kategori->posts->load('category','author');
    return view('posts', ['title' => count($kategori->posts) . ' Categories in : ' . $kategori->nama_kategori, 'posts' => $kategori->posts]);
});