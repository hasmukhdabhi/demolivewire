<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ProductComponent;
use App\Livewire\Profile;
use App\Livewire\ProductSave;
// use App\Http\Livewire\ProductComponent;
use App\Livewire\CrudForm;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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

Route::get('/products', function () {
    return view('products');
});
// Route::get('/products', CrudForm::class);
Route::resource('products', ProductController::class);

// login register route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');