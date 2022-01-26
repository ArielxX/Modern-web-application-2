<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(30)->create();
        $posts = Post::factory(50)->create();

        $amountOfTags = 0;

        for ($i = 0; $i < 70; $i++) {
            $name = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm'), 0, rand(3, 10));
            $tag = Tag::updateOrCreate(['name' => $name]);
            $amountOfTags = max($amountOfTags, $tag->id);
        }

        foreach ($posts as $post) {
            $range = range(0, $amountOfTags);
            $random = random_int(2, 10);
            $randomTags = collect($range)->shuffle()->slice(0, $random);
            $userTags = Post::find($randomTags);
            $post->tags()->attach($userTags);
        }

        $adminUser = User::Create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => true
        ]);
    }
}
