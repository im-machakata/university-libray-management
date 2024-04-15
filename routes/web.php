<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
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
Route::get('/search-books', [BooksController::class, 'index']);
Route::get('/read-books', [BooksController::class, 'read']);
Route::get('/login', [AccountController::class, 'login']);
Route::get('/register', [AccountController::class, 'register']);
Route::get('/chat-with-a-librarian', [ChatController::class, 'index']);

Route::middleware(UserIsLogged::class)->group(static function () {
    // add all routes that need to be accessed while logged in here. 
});
