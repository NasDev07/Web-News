<?php

use App\Models\Post;

// User
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SofdeletedController;

// Admin
use App\Http\Controllers\PostController as UserHomeController;
use App\Http\Controllers\UserController as adminUserController;
use App\Http\Controllers\UserProdukController as UserProdukController;
use App\Http\Controllers\adminCategoryController as adminCategoryController;
use App\Http\Controllers\UserPemakaianController as UserPemakaianController;
use App\Http\Controllers\DashboardPostController as adminDashboardPostController;

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


// route data kirim ke halaman utama ke user
// route blog
Route::get('/', [UserHomeController::class, 'index']);
Route::get('post-detail/{id}/show', [UserHomeController::class, 'show'])->name('post.show');
Route::get('/blog-posts', [UserHomeController::class, 'blogpost'])->name('blog');
// contact
Route::get('/contact', function () {
    $footerPosts = Post::latest()->take(4)->get();
    return view('home.contact')->with('footerPosts', $footerPosts);
});

// About
Route::get('/about', function () {
    $footerPosts = Post::latest()->take(4)->get();
    return view('home.about')->with('footerPosts', $footerPosts);
});


// perbaikan dari Nas untuk user & admin
// dashboard
Route::get('/dashboard', function () {
    $menuDashbord = 'active';
    return view('dashboard', compact('menuDashbord'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// perbaikan dari Nas untuk admin
// dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', adminUserController::class);
});


Route::middleware(['auth'])->group(function () {
    Route::resource('posts', adminDashboardPostController::class);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('category', adminCategoryController::class);
});
Route::get('/dataDelete', [SofdeletedController::class, 'postsdel'])->middleware('auth', 'admin');
Route::get('/data/{id}/restore', [SofdeletedController::class, 'restore'])->middleware('auth', 'admin');

require __DIR__ . '/auth.php';
