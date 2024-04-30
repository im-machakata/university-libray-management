<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\TutorialsController;
use App\Http\Middleware\UserIsAdmin;
use App\Http\Middleware\UserIsLogged;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/system-tutorials', [TutorialsController::class, 'index']);
Route::get('/system-tutorials/{slug}', [TutorialsController::class, 'read'])->name('tutorial.read');
Route::get('/system/migrate', [MigrationController::class, 'update']);

Route::middleware('guest')->group(static function () {
    // add all routes that should work when not logged in only
    Route::get('/login', [UsersController::class, 'login']);
    Route::post('/login', [UsersController::class, 'authenticate']);
    Route::get('/register', [UsersController::class, 'register']);
    Route::post('/register', [UsersController::class, 'createUserAccount']);
});

Route::middleware(['auth', 'session.valid'])->group(static function () {
    // add all routes that need to be accessed while logged in here. 
    Route::get('/logout', [UsersController::class, 'delete']);
    Route::get('/search-books', [BooksController::class, 'index']);
    Route::get('/read-books', [BooksController::class, 'read']);
    Route::get('/talk-to-a-librarian', [ChatController::class, 'index']);
});

Route::middleware(['auth', 'session.valid', UserIsAdmin::class])->group(static function () {
    // add all routes that need to be accessed with admins
    Route::get('/books/new', [BooksController::class, 'create'])->name('books.create');
    Route::post('/books/new', [BooksController::class, 'store'])->name('books.store');
    Route::get('/tutorials/new', [TutorialsController::class, 'create'])->name('tutorials.create');
    Route::post('/tutorials/new', [TutorialsController::class, 'store'])->name('tutorials.store');
});
