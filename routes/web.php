<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



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
    return view("Home", [
        'title' => 'Home',
        "active"=> "home" 
        ]
    );
});

Route::get('/about', function () {
    return view("About" , [
        'title' => 'About',
        "active"=> "about",
        'name' => 'Muhammad Rizki',
        'email' => 'Muhammadrizkitkj123@gmail.com',
        'image' => 'Muhammad Rizki',
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get("/categories", function(){
    return view("categories", [
        "title" =>"Post Categories",
        "active"=> "categories",
        "categories" =>Category::all()
    ]);
});


Route::get("/categories/{category:slug}", function(Category $category){
    return view ("post",[
        "title" =>"Post by Category : $category->name",
        "active"=> 'categories',
        "posts" =>$category->posts->load("author","category"),
    ]);
});


Route::get("/authors/{author:username}", function(User $author){
    return view ("post",[
        "title" =>"Postby Author : $author->name",
        "posts" =>$author->posts->load("category","author"),

]);
});



