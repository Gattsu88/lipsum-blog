<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        User::factory()->create([
            'name' => 'Gattsu Berserk',
            'username' => 'gattsu',
            'email' => 'gattsu@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(9)->create();

        Category::factory(3)->create();

        Post::factory(25)->create();
    }
}
