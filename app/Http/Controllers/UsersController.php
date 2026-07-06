<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = User::where('id', '!=', auth()->id());

        if (!empty($keyword)) {
            $query->where('username', 'like', '%' . $keyword . '%');
        }

        $users = $query->get();
        $followingIds = auth()->user()->following->pluck('id')->toArray();

        return view('users.search', compact('users', 'keyword', 'followingIds'));
    }

    public function follow(User $user)
    {
        auth()->user()->following()->attach($user->id);

        return back();
    }

    public function unfollow(User $user)
    {
        auth()->user()->following()->detach($user->id);

        return back();
    }
    public function show(User $user)
    {
        $isFollowing = auth()->user()->following->contains($user->id);
        $posts = $user->posts()->latest()->get();

        return view('users.show', compact('user', 'isFollowing', 'posts'));
    }
}
