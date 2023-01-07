<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    Protected $guarded = ['id'];
//    protected $fillable = ['title', 'excerpt', 'body', 'id'];

    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }
}
