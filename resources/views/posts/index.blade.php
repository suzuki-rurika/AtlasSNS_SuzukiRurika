<x-login-layout>

<div class="content">

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => 'posts']) !!}
        {{ Form::textarea('post', null, ['placeholder' => 'いまどうしてる?', 'maxlength' => 150]) }}
        <button type="submit" class="btn-post"></button>
    {!! Form::close() !!}

    <hr>

    @foreach ($posts as $post)
            <div class="post" id="post-{{ $post->id }}">
                <p>{{ $post->user->username }}</p>
                <p>{{ $post->post }}</p>
                <p>{{ $post->created_at->format('Y-m-d H:i') }}</p>

                @if ($post->user_id === auth()->id())
                    <div class="post-actions">
                        <a class="js-modal-open btn-icon btn-edit" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"></a>

                        {!! Form::open(['url' => 'posts/' . $post->id, 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn-icon btn-trash"></button>
                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        @endforeach

</div>

<!-- モーダルの中身 -->
<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        {!! Form::open(['url' => 'posts', 'method' => 'PUT']) !!}
            {{ Form::textarea('post', null, ['class' => 'modal_post']) }}
            {{ Form::hidden('id', null, ['class' => 'modal_id']) }}
            {{ Form::submit('更新') }}
        {!! Form::close() !!}
        <a class="js-modal-close" href="">閉じる</a>
    </div>
</div>

</x-login-layout>
