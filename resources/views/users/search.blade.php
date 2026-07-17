<x-login-layout>

    {!! Form::open(['url' => 'search', 'method' => 'GET']) !!}
        {{ Form::text('keyword', $keyword ?? null, ['placeholder' => 'ユーザー名で検索']) }}
        {{ Form::submit('検索') }}
    {!! Form::close() !!}

    @if (!empty($keyword))
        <p>検索ワード：{{ $keyword }}</p>
    @endif

    @foreach ($users as $user)
        <div class="user-row">
            <a href="{{ url('users/' . $user->id) }}" class="user-row-link">
                <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="">
                <span>{{ $user->username }}</span>
            </a>

            @if (in_array($user->id, $followingIds))
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger btn-sm">フォロー解除</button>
                {!! Form::close() !!}
            @else
                {!! Form::open(['url' => 'follow/' . $user->id, 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-primary btn-sm">フォローする</button>
                {!! Form::close() !!}
            @endif
        </div>
    @endforeach

</x-login-layout>
