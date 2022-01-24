<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
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
        $users = User::factory(30)->create();
        $posts = Post::factory(50)->create();
        $tags = Tag::factory(70)->create();

        foreach ($posts as $post) {
            $range = range(0, 70);
            $random = random_int(2, 10);
            $randomTags = collect($range)->shuffle()->slice(0, $random);
            $userTags = Post::find($randomTags);
            $post->tags()->attach($userTags);
        }
    }
}
