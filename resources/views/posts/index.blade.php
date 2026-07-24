<x-login-layout>

<div class="content">

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="composer">
        <img class="user-avatar" src="{{ asset('images/' . auth()->user()->icon_image) }}" alt="{{ auth()->user()->username }}">
        <div class="composer-body">
            {!! Form::open(['url' => 'posts']) !!}
                {{ Form::textarea('post', null, ['placeholder' => 'いまどうしてる?']) }}
                <button type="submit" class="btn-post"></button>
            {!! Form::close() !!}
        </div>
    </div>

    <hr>

    @foreach ($posts as $post)
        @include('posts._post-item', ['post' => $post])
    @endforeach

</div>

<!-- 編集モーダルの中身 -->
<div class="modal js-modal" @if ($errors->any() && old('id')) style="display: block;" @endif>
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        {!! Form::open(['url' => 'posts', 'method' => 'PUT']) !!}
            {{ Form::textarea('post', null, ['class' => 'modal_post']) }}
            {{ Form::hidden('id', null, ['class' => 'modal_id']) }}
            <button type="submit" class="btn-icon btn-edit"></button>
        {!! Form::close() !!}
    </div>
</div>

</x-login-layout>
