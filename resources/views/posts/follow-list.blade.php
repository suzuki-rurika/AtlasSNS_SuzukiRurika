<x-login-layout>

    <h2>フォローリスト</h2>

    <div id="icon-list">
        @foreach ($users as $user)
            <a href="{{ url('users/' . $user->id) }}">
                <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}">
            </a>
        @endforeach
    </div>

    <hr>

    @foreach ($posts as $post)
        @include('posts._post-item', ['post' => $post])
    @endforeach

</x-login-layout>
