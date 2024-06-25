<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'muhammad aminuddin',
        //     'username' =>'muhammadaminuddin',
        //     'email' => 'muhammadaminuddintuban@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web progaraming',
        //     'slug' => 'judul-artikel-1'
        // ]);

        // Post::create([
        //     'title' => 'Judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'Judul-artikel-1',
        //     'body' =>'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database, you will be prompted for confirmation before the seeders are executed in the'
        // ]);

        // Post::factory(100)->recycle([
        //     User::factory(5)->create(),
        //     Category::factory(3)->create()
        // ])->create();

        // CARA MEMANGGIL SEEDER TERPISAH
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
           Category::all(),
           User::all()
        ])->create();
    }
}
