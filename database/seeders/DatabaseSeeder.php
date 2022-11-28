<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
           'name' => 'Administrator',
           'email' => 'admin@admin.com',
           'user_type' => User::ADMIN,
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Vendor',
            'email' => 'user@user.com',
            'user_type' => User::USER,
            'password' => bcrypt('user')
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
