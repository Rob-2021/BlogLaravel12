<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Juan Perez',
            'email' => 'juanperez@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Category::factory(5)->create();
        Post::factory(100)->create();
        Tag::factory(10)->create();
    }
}
