<?php

namespace Database\Factories;

use App\Models\AdminSettings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdminSettingsFactory extends Factory
{
    protected $model = AdminSettings::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
        ];
    }
}
