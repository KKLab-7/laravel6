<header>
    <img src="{{ asset('/assets/img/brand.png')}}" alt="ロゴ">
    <div id="user">
        <ul>
            @if(session()->has('User'))
            <li id="name">{{ session()->get('User.name') }}さん</li>
                @if(session()->has('User.body_id'))
                <li><a href="#">体型登録</a></li>
                @else
                <li><a href="#">体型編集</a></li>
                @endisset
            <li><a href="#">購入履歴</a></li>
            @else
            <li><a href="#">新規登録</a></li>
            <li><a href="{{ route('user.index') }}">ログイン</a></li>
            @endisset
            <li><img src="{{ asset('/assets/img/cart.png')}}" alt="カート"></li>
        </ul>
    </div>
</header>
<nav>
  <ul>
    <a href=""><li>New Arrival</li></a>
    <a href=""><li>Ordar Made</li></a>
    <a href=""><li>Coordination</li></a>
    <a href=""><li>Ranking</li></a>
    <a href=""><li>News&Event</li></a>
  </ul>
</nav>
