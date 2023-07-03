<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resources([
    'posts' => PostController::class,
    'comments' =>CommentController::class,
    // 'users' => UserController::class,
]);

Route::get('/',[PostController::class,'index'])->name('welcome');

// Route::get('/create',[PostController::class,'create'])->name('create');

// Route::get('/show/{{id}}',[PostController::class, 'show'])->name('show');

// Route::post('/store',[PostController::class,'store'])->name('store');





Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::post('logout',[Authcontroller::class, 'logout'])->name('logout');

Route::get('/register',[AuthController::class, 'register'])->name('register');

Route::post('authenticate',[Authcontroller::class, 'authenticate'])->name('authenticate');

Route::post('/register', [AuthController::class, 'register_store'])->name('register.store');


