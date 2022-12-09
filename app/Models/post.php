<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class post
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }


    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        return array_map(static fn ($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        if( ! file_exists($path = base_path("resources/posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

    return cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));
    }
}
