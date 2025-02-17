<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ProductComponent;
use App\Livewire\Profile;
use App\Livewire\ProductSave;
// use App\Http\Livewire\ProductComponent;
use App\Livewire\CrudForm;


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

Route::view('search', 'usersearch');
Route::view('user', 'user');

// Route::view('product', 'livewire.product-save');
Route::get('/add-product', ProductSave::class);

// profile route

// Route::view('/profile', 'profile');


// Route::get('/products', ProductComponent::class);
// Route::get('/products', ProductComponent::class)->name('products');

// Route::get('/', CrudForm::class);

Route::get('/products', function () {
    return view('products');
});
