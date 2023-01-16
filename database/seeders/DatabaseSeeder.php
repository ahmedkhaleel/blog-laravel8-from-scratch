<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'lorem-ipsum-dolor-sit-amet',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'Lorem ipsum work sit amet',
            'slug' => 'lorem-ipsum-work-sit-amet',
            'excerpt' => 'Lorem ipsum work sit amet, consectetur adipiscing elit.',

            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
