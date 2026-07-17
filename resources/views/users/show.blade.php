<x-login-layout>

    <div class="user-row">
        <div class="user-row-link">
            <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="">
            <span><strong>ユーザー名</strong>　{{ $user->username }}</span>
        </div>

        @if ($user->id !== auth()->id())
            @if ($isFollowing)
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger btn-sm">フォロー解除</button>
                {!! Form::close() !!}
            @else
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-primary btn-sm">フォローする</button>
                {!! Form::close() !!}
            @endif
        @endif
    </div>

    <p><strong>自己紹介</strong>　{{ $user->bio }}</p>

    <hr>

    @foreach ($posts as $post)
        @include('posts._post-item', ['post' => $post])
    @endforeach

</x-login-layout>
