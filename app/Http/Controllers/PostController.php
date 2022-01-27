<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->orderByDesc('id')->paginate();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest['author_id'] = Auth::user()->id;
        $tagList = [];

        if (isset($validatedRequest['tags'])) {
            $tags = $validatedRequest['tags'];
            unset($validatedRequest['tags']);

            foreach ($tags as $tagName) {
                $tag = Tag::updateOrCreate(['name' => $tagName]);
                if (! in_array($tag->id, $tagList)) {
                    array_push($tagList, $tag->id);
                }
            }
        }

        $post = Post::create($validatedRequest);

        if ($request->hasFile('image')) {
            if ($post->getMedia('images')->count() > 0) {
                $post->deleteMedia($post->media->last()->id);
            }
            $post->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $post->tags()->attach($tagList);

        cache()->forget('welcome_posts');
        cache()->forget('welcome_tags');

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        ray($request, $request->validated());

        Gate::authorize('manage-post', $post);

        if ($request->hasFile('image')) {
            if ($post->getMedia('images')->count() > 0) {
                $post->deleteMedia($post->media->last()->id);
            }
            $post->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $request = $request->validated();

        $tagList = [];
        if (isset($request['tags'])) {
            $tags = $request['tags'];
            unset($request['tags']);

            foreach ($tags as $tagName) {
                $tag = Tag::updateOrCreate(['name' => $tagName]);
                if (! in_array($tag->id, $tagList)) {
                    array_push($tagList, $tag->id);
                }
            }
        }

        $post->update($request);
        $post->tags()->detach();
        $post->tags()->attach($tagList);

        cache()->forget('welcome_posts');
        cache()->forget('welcome_tags');

        return redirect()->route('posts.index');
    }

    public function destroy(int $postId)
    {
        $post = Post::find($postId);
        Gate::authorize('manage-post', $post);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
