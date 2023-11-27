<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(10)->create();
        Tag::factory(10)->create();

        Post::factory(100)->create();
    }
}
