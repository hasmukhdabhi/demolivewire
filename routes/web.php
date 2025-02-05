<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;

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
    return view('welcome');
});

// livewire component route

Route::get('/counter', Counter::class);
// Route::get('/posts', CreatePost::class);
Route::get('/posts', CreatePost::class)->name('posts.index');
Route::get('/posts/create', CreatePost::class);