<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('posts.id', 'desc')->take(5)
            ->with('author')
            ->get();

        foreach ($posts as $post) {
            $post->tags = Post::find($post->id)->tags()->get();
        }

        $tags = Tag::orderBy('name')->get();

        return view('welcome', compact('posts', 'tags'));
    }
}
