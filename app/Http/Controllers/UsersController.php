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

        return $this->redirectAfterFollowChange();
    }

    public function unfollow(User $user)
    {
        auth()->user()->following()->detach($user->id);

        return $this->redirectAfterFollowChange();
    }

    /**
     * ユーザー検索ページ(キーワード付き結果画面を含む)からの操作であれば
     * キーワード無しの検索前の画面に戻し、それ以外の画面(相手のプロフィール等)
     * からの操作であればそのまま元の画面に戻す。
     */
    private function redirectAfterFollowChange()
    {
        if (str_contains(url()->previous(), '/search')) {
            return redirect('search');
        }

        return back();
    }
    public function show(User $user)
    {
        $isFollowing = auth()->user()->following->contains($user->id);
        $posts = $user->posts()->latest()->get();

        return view('users.show', compact('user', 'isFollowing', 'posts'));
    }
}
