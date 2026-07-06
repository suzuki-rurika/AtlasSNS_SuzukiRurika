<x-login-layout>

    <div id="icon-list">
        @foreach ($users as $user)
            <a href="{{ url('users/' . $user->id) }}" class="user-row-link">
                <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="">
                <span>{{ $user->username }}</span>
            </a>
        @endforeach
    </div>

    <hr>

    @foreach ($posts as $post)
        <div class="post">
            <a href="{{ url('users/' . $post->user->id) }}" class="user-row-link">
                <img class="user-avatar" src="{{ asset('images/' . $post->user->icon_image) }}" alt="">
                <span>{{ $post->user->username }}</span>
            </a>
            <p>{{ $post->post }}</p>
            <p>{{ $post->created_at->format('Y-m-d H:i') }}</p>
        </div>
    @endforeach

</x-login-layout>
