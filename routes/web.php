<?php

use App\Models\post;
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
    $files = File::files(resource_path("posts"));
    $posts = [];

    foreach ($files as $file) {
        $document = YamlFrontMatter::parseFile($file);
        $posts[] = new post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
        );
    }

    ddd($posts);


//    return view('posts',[
//        'posts' => post::all()
//    ]);
});

Route::get('posts/{post}', fn($slug) => view('post',[
    'post' => Post::find($slug)
]))->where('post', '[A-z_\-]+');
