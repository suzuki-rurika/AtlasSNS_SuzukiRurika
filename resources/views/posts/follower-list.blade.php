<x-login-layout>

<div id="icon-list">
    @foreach ($users as $user)
        <a href="{{ url('users/' . $user->id) }}">
            <p>{{ $user->username }}</p>
        </a>
    @endforeach
</div>

<hr>

@foreach ($posts as $post)
    <div class="post">
        <a href="{{ url('users/' . $post->user->id) }}">
            <p>{{ $post->user->username }}</p>
        </a>
        <p>{{ $post->post }}</p>
        <p>{{ $post->created_at->format('Y-m-d H:i') }}</p>
    </div>
@endforeach

</x-login-layout>
