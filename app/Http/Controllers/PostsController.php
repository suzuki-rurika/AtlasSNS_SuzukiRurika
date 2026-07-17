<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $userIds = auth()->user()->following->pluck('id')->push(auth()->id());
        $posts = Post::with('user')->whereIn('user_id', $userIds)->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function followList()
    {
        $users = auth()->user()->following;
        $posts = Post::with('user')->whereIn('user_id', $users->pluck('id'))->latest()->get();

        return view('posts.follow-list', compact('users', 'posts'));
    }

    public function followerList()
    {
        $users = auth()->user()->followers;
        $posts = Post::with('user')->whereIn('user_id', $users->pluck('id'))->latest()->get();

        return view('posts.follower-list', compact('users', 'posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'post' => 'required|string|min:1|max:150',
        ]);

        Post::create([
            'user_id' => auth()->id(),
            'post' => $request->post,
        ]);

        return redirect('top');
    }

    public function update(Request $request)
    {
        $post = Post::findOrFail($request->id);

        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'post' => 'required|string|min:1|max:150',
        ]);

        $post->update(['post' => $request->post]);

        return redirect('top');
    }

    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $post->delete();

        return redirect('top');
    }
}
