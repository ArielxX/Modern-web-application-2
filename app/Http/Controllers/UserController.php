<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        $user->posts = $user->posts();
        foreach ($user->posts as $post) {
            $post->tags = Post::find($post->id)->tags()->get();
        }

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        Gate::authorize('edit-user', $user);
        $user->update($request->validated());

        if ($request->hasFile('image')) {
            $user->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('users.index');
    }

    public function destroy(int $userId)
    {
        $user = User::find($userId);
        Gate::authorize('remove-user', $user);

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
