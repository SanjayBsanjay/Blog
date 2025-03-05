<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

// Route::get('/blogs', [BlogController::class, 'featured'])->name('blogs.featured'); // Featured blog posts
// Route::get('/blogs/category/{categoryId}', [BlogController::class, 'categoryBlogs'])->name('category.blogs');
// Route::get('/blog/{postTitle}', [BlogController::class, 'detail'])->name('blogs.detail'); // Article detail page
// Route::get('/blogs/tag/{tagName}', [BlogController::class, 'byTag'])->name('blogs.byTag'); // Articles by tag
// Route::get('/blog/{title}', [BlogController::class, 'show'])->name('blogs.show'); // Individual blog post by title

// Route::get('/blogs/search', [BlogController::class, 'search'])->name('blogs.search');



// Route::get('/blogs', [BlogController::class, 'featured'])->name('blogs.featured'); // Featured blog posts
// Route::get('/blogs/category/{categoryId}', [BlogController::class, 'categoryBlogs'])->name('category.blogs');
// Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blogs.detail'); // Article detail page
// Route::get('/blogs/tag/{tagName}', [BlogController::class, 'byTag'])->name('blogs.byTag'); // Articles by tag
// Route::get('/blogs/search', [BlogController::class, 'search'])->name('blogs.search');


// Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blogs.detail');


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index'); // All posts
Route::get('/blogs/featured', [BlogController::class, 'featured'])->name('blogs.featured'); // Featured posts
Route::get('/blogs/category/{name}', [BlogController::class, 'categoryBlogs'])->name('category.blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'detail'])->name('blogs.detail'); // Article detail page
Route::get('/blogs/tag/{slug}', [BlogController::class, 'byTag'])->name('blogs.byTag'); // Articles by tag
Route::get('/blogs/search', [BlogController::class, 'search'])->name('blogs.search');


