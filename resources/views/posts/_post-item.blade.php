{{-- 投稿一覧・フォローリスト・フォロワーリスト・ユーザー詳細で共通利用する投稿カード --}}
<div class="post" id="post-{{ $post->id }}">
    <a href="{{ url('users/' . $post->user->id) }}" class="post-avatar-link">
        <img class="user-avatar" src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}">
    </a>

    <div class="post-body">
        <div class="post-header">
            <a href="{{ url('users/' . $post->user->id) }}" class="post-username">{{ $post->user->username }}</a>
            <span class="post-date">{{ $post->created_at->format('Y-m-d H:i') }}</span>
        </div>

        <p class="post-content">{{ $post->post }}</p>

        @if ($post->user_id === auth()->id())
            <div class="post-actions">
                <a class="js-modal-open btn-icon btn-edit" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"></a>
                {!! Form::open(['url' => 'posts/' . $post->id, 'method' => 'DELETE', 'class' => 'js-delete-form']) !!}
                    <button type="submit" class="btn-icon btn-trash"></button>
                {!! Form::close() !!}
            </div>
        @endif
    </div>
</div>
