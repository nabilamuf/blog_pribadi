<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/home', function () {
    return view('home',[
        "title"=> "home",
        'active'=>'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=>"about",
        "active"=>"about",
        "name"=>"nabila ",
        "email"=>"nabilamufff@gmail.com",
        "image"=>"nabila.jpeg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);


//halaman single post 
//kalo hanya post dia mengirim data default nya berdasarkan id jadi tambah :slug untuk mencari  nialai slug 
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (){
    return view('categories',[
        'title'=>'Post Categories',
        'active'=>'categories',
        'categories'=>Category::all() 
       
    ]);
});


Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);
