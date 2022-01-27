<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $ttl = config('app.welcome_cache_ttl');

        $posts = cache()->remember(
            "welcome_posts",
            $ttl,
            function () {
                $posts = Post::orderBy('posts.id', 'desc')->take(5)
                    ->with('author')
                    ->get();
                foreach ($posts as $post) {
                    $post->tags = Post::find($post->id)->tags()->get();
                }
                return $posts;
            }
        );

        $tags = cache()->remember(
            "welcome_tags",
            $ttl,
            function () {
                return Tag::orderBy('name')->get();
            }
        );

        return view('welcome', compact('posts', 'tags'));
    }
}
