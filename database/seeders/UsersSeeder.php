<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(50)->create();

        for ($i = 1; $i <= 50; $i++) {
            UserMeta::factory()->create([
                'user_id' => $i,
            ]);
        }

        $user = User::factory()->create([
            'username' => 'Vasileios Ntoufoudis',
            'email' => 'info@ntoufoudis.com',
        ]);
        $user->syncRoles('Super-Admin');

        UserMeta::factory()->create([
            'user_id' => $user->id,
            'nickname' => 'ntoufoudis',
            'firstName' => 'Vasileios',
            'lastName' => 'Ntoufoudis',
            'displayName' => 'Vasileios Ntoufoudis',
            'website' => 'https://ntoufoudis.com',
        ]);
    }
}
