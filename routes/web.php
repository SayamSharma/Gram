<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ParentChildController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Mail\NewUserWelcomeMail;

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


Auth::routes();

Route::get('/email',function(){
     return new NewUserWelcomeMail();
});

Route::post('/follow/{user}',[FollowsController::class,'store']);

Route::get('/',[PostsController::class,'index']);
Route::get('/p/create',[PostsController::class,'create'])->name('post.create');
Route::post('/p',[PostsController::class,'store'])->name('post.store');
Route::get('/p/{post}',[PostsController::class,'show']);

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit',[ProfilesController::class,'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

// Route::get('/category',[ParentChildController::class,'index']);

// Route::get('/add',[ParentChildController::class,'add'])->name('category.add');

// Route::post('/create',[ParentChildController::class,'create'])->name('category.create');
