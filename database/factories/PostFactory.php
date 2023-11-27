<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'category_id' => $this->faker->numberBetween(1, 10),
            'tag_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraphs(2, true),
            'body' => $this->faker->paragraphs(6, true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
