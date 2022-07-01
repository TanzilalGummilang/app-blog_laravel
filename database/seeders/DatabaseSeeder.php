<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Tanzilal Gummilang",
            'username' => "tanzilal",
            'email' => "tanzilal_hehe@gmail.com",
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming"
        ]);

        Category::create([
            'name' => "Web Desain",
            'slug' => "web-desain"
        ]);

        Post::factory(20)->create();

    }
}