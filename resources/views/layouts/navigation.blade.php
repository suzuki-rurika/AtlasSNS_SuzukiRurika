<div id="head">
<h1><a href="{{ url('top') }}"><img src="{{ asset('images/atlas.png') }}"></a></h1>
    <div id="account-menu">
    <div id="account-toggle" onclick="toggleAccordion()">
            <p>{{ Auth::user()->username }}さん <span id="arrow-icon">▼</span></p>
            <img class="header-avatar" src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="">
        </div>
        <ul id="account-menu-list" style="display: none;">
            <li><a href="{{ url('top') }}">HOME</a></li>
            <li><a href="{{ url('profile') }}">プロフィール編集</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>
            </li>
        </ul>
    </div>
</div>

<script>
    function toggleAccordion() {
        const list = document.getElementById('account-menu-list');
        const arrow = document.getElementById('arrow-icon');
        if (list.style.display === 'none') {
            list.style.display = 'block';
            arrow.style.transform = 'rotate(180deg)';
        } else {
            list.style.display = 'none';
            arrow.style.transform = 'rotate(0deg)';
        }
    }
</script>
