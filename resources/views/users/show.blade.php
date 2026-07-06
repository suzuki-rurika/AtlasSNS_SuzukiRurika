<x-login-layout>

    <div class="user-row">
        <div class="user-row-link">
            <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="">
            <span>{{ $user->username }}</span>
        </div>

        @if ($user->id !== auth()->id())
            @if ($isFollowing)
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-outline-secondary btn-sm">フォロー解除</button>
                {!! Form::close() !!}
            @else
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-primary btn-sm">フォローする</button>
                {!! Form::close() !!}
            @endif
        @endif
    </div>

    <p>{{ $user->bio }}</p>

    <hr>

    @foreach ($posts as $post)
        <div class="post">
            <p>{{ $post->post }}</p>
            <p>{{ $post->created_at->format('Y-m-d H:i') }}</p>
        </div>
    @endforeach

</x-login-layout>
