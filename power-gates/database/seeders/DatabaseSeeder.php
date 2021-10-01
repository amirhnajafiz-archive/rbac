<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Super admin
        User::query()->create([
            'name' => 'Super admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '1234',
            'remember_token' => Str::random(10),
        ]);

        // Users seeding
        User::factory(10)->create();
    }
}
