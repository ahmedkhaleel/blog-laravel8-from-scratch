<?php

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    return view('posts',[
        'posts' => post::latest()->with(['category', 'author'])->get()
    ]);
});

Route::get('posts/{post}', static function (Post $post){

    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', static function (Category $category){

    return view('posts',[
        'posts' => $category->posts
    ]);
});


Route::get('author/{author:username}', static function (User $author){

    return view('posts',[
        'posts' => $author->posts
    ]);
});
