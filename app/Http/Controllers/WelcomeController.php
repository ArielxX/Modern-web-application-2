<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('posts.id', 'desc')->take(5)
            ->join('users', 'users.id', '=', 'author_id')
            ->get();

        return view("welcome", compact('posts'));
    }
}
