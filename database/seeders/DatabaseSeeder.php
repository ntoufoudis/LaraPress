<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Vasileios Ntoufoudis',
            'email' => 'info@ntoufoudis.com',
        ]);

        Category::factory(50)->create();
        Tag::factory(50)->create();
    }
}
