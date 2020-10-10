@extends('front.layout.login')

@section('content')
<main>
    <img src="{{ asset('/assets/img/brand.png') }}" alt="">
    <form action="{{ route('user.login') }}" method="post">
        @csrf
        <p><h2>ログイン</h2></p>
        @if($message)
            <p class="error">{{ $message }}</p>
        @endif
        <p><input type="text" name="email" value="" placeholder='E-mail'></p>
        <p><input type="password" name="password" value="" placeholder="password"> </p>
        <button type="submit" name="button">送　信</button>
    </form>
    <p><a href="{{-- route('new.user') --}}">初めての方</a></p>
    <p><a href="{{-- route('password.change') --}}">パスワードを忘れてしまった方</a></p>
</main>
@endsection
