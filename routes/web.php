<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('/message', [PageController::class, 'message'])->name('message');
Route::get('/about-us', [PageController::class, 'about'])->name('about.index');
Route::get('/service', [PageController::class, 'service'])->name('service.index');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.index');
Route::get('/register', [PageController::class, 'register'])->name('register.index');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [PageController::class, 'post'])->name('blog.show');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact.index');
Route::get('/shop', [PageController::class, 'shop'])->name('shop.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'team'
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'team'])->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::resource('post', PostController::class)->scoped([
        'post' => 'slug'
    ]);
    Route::resource('product', ProductController::class)->scoped([
        'product' => 'slug'
    ]);
    Route::resource('category', CategoryController::class)->scoped([
        'category' => 'slug'
    ]);
    Route::resource('user', UserController::class);
});
