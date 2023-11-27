<?php

namespace Database\Factories;

use App\Models\UserMeta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserMetaFactory extends Factory
{
    protected $model = UserMeta::class;

    public function definition(): array
    {
        return [
            'nickname' => $this->faker->firstName(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'displayName' => $this->faker->name(),
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
        ];
    }
}
