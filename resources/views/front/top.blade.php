@extends('front.layout.main')

@section('content')
<div id="image">
    <img src="{{ asset('/assets/img/72422264_243348206642165_146419056544652957_n.jpg')}}" alt="">
  </div>
<main>
    <div id="sidebar">
        <div class="category">
            <h4>アイテム</h4>
            <ul>
                <li>Tシャツ</li>
                <li>ブラウス</li>
                <li>セーター</li>
                <li>カーディガン</li>
                <li>ワンピース</li>
                <li>スカート</li>
                <li>パンツ</li>
                <li>ジャケット</li>
                <li>ベスト</li>
                <li>コート</li>
                <li>スーツ</li>
                <li>シューズ</li>
            </ul>
        </div>
        <div class="category">
            <h4>お気に入り</h4>
            <ul>
                <li>アイテム</li>
                <li>オーダーメイド</li>
            </ul>
        </div>
        <div class="category">
            <h4>コーディネート</h4>
            <ul>
              <li>アイテム</li>
              <li>目的</li>
              <li>カラー</li>
              <li>テキスタイル</li>
            </ul>
        </div>
    </div>
    <div id="box">
        <div class="nav_box">
            <form>
                <div class="nav_name">
                    <h2>New Arrival</h2>
                </div>
                <div class="product">
                    @foreach($products as $product)
                    <div class="product_box">
                        <a href=""><img src="{{ asset('/assets/img/'.$product->img)}}" alt=""></a>
                        <p class="product_name">{{ $product->name }}</p>
                        <p class="cost">¥{{ $product->cost }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="nav_box">
                    <div class="nav_name">
                        <h2>Ranking</h2>
                    </div>
                    <div class="product">
                      @foreach($products as $product)
                      <div class="product_box">
                          <a href=""><img src="{{ asset('/assets/img/'.$product->img)}}" alt=""></a>
                          <p class="product_name">{{ $product->name }}</p>
                          <p class="cost">¥{{ $product->cost }}</p>
                      </div>
                      @endforeach
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
