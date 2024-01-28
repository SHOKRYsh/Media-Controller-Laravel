<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return "<h1> users </h1>" . $id . "  " . $name;
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/features', [PagesController::class, 'features']);

Route::resource('posts', PostsController::class);
// Route::get('/posts', [PostsController::class, 'index']);
// Route::get('/posts/create', [PostsController::class, 'create']);
// Route::post('/posts', [PostsController::class, 'store']);
// Route::get('/posts/{post}', [PostsController::class, 'show']);
// Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
// Route::put('/posts/{post}', [PostsController::class, 'update']);
// Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

Route::get('/media', [MediaController::class, 'index']);
Route::get('/media/upload', [MediaController::class, 'create']);
Route::post('/media', [MediaController::class, 'store']);
Route::get('/media/{media}', [MediaController::class, 'show']);
Route::delete('/media/{media}', [MediaController::class, 'destroy']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
