<?php

namespace Database\Seeders;

use App\Models\Task;
use DB;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        //$this->call(UserSeeder::class);

        Task::factory()->count(10)->create();
    }
}

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            "email" => "def@defmail.com",
            "password" => bcrypt("123456789"),
            "username" => "def@123",
            "is_admin" => 1,
            "is_active" => 1,
            "first_name" => "DEF",
            "last_name" => "GHY"
        ]);
    }
}
