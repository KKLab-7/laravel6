@extends('front.layout.main')

@section('content')
<main>
  <form class="" action="index.html" method="post">
    <div class="product">
      <table>
        <tr>
          <th>商品</th>
          <th>商品名</th>
          <th>カラー</th>
          <!-- <th>サイズ</th> -->
          <th>数量</th>
          <th>金額</th>
        </tr>
        <tr>
          <td><img src="{{ asset('/assets/img/summer_clothes1.jpg')}}" alt="ロゴ"></td>
          <td><?=$product["name"]?></td>
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <input type="hidden" name="name" value="{{ $product->name }}">
          <td>
            <select name="color">
              <option value="ベージュ">ベージュ</option>
              <option value="グレー">グレー</option>
              <option value="ブラウン">ブラウン</option>
              <option value="ブラック">ブラック</option>
            </select>
          </td>
          <!-- <td>
            <select name="size">
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="LL">LL</option>
            </select>
          </td> -->
          <td>
            <select name="num">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </td>
          <td>¥{{ number_format($product->cost) }}</td>
          <input type="hidden" name="cost" value="{{ number_format($product->cost) }}">
        </tr>
      </table>
    </div>
    <div id="cost">
      <dl>
        <dt>商品合計(税込)</dt>
        <dd>¥{{ number_format($product->cost) }}</dd>
      </dl>
      <button type="submit" name="button">レジへ進む</button>
      <button type="submit" name="button" formaction="">カートに入れる</button>
      <a href="#">買い物に戻る</a>

    </div>
  </form>
  <div id="Recommendation">
    <h4>アイテムに合うおすすめ</h4>
    <div id="Recommendation_frame">
      <div class="Recommendation_box">
        <?= $this->Html->image("SelfMaking/020101901_c000_a001_pz.jpg")?>
        <p>Tシャツ</p>
        <p>¥3,000</p>
      </div>
      <div class="Recommendation_box">
        <?= $this->Html->image("SelfMaking/193-901912110191_1.jpg")?>
        <p>シャツ</p>
        <p>¥7,000</p>
      </div>
      <div class="Recommendation_box">
        <?= $this->Html->image("SelfMaking/to517-34251-01c.jpg")?>
        <p>キャスケット</p>
        <p>¥5,000</p>
      </div>
    </div>
  </div>
</main>
@endsection
