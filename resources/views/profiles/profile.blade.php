<x-login-layout>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <img class="user-avatar" src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}">

    {!! Form::model($user, ['url' => 'profile', 'method' => 'PUT', 'files' => true]) !!}

        <div class="form-group">
            {{ Form::label('username', 'ユーザー名') }}
            {{ Form::text('username', $user->username) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'メールアドレス') }}
            {{ Form::email('email', $user->email) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'パスワード') }}
            {{ Form::password('password') }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'パスワード確認') }}
            {{ Form::password('password_confirmation') }}
        </div>

        <div class="form-group">
            {{ Form::label('bio', '自己紹介') }}
            {{ Form::textarea('bio', $user->bio) }}
        </div>

        <div class="form-group">
            {{ Form::label('icon_image', 'アイコン画像') }}
            {{ Form::file('icon_image') }}
        </div>

        {{ Form::submit('更新する') }}

    {!! Form::close() !!}

</x-login-layout>
