@extends('layout')<!--layout.blade.phpを指定-->

<!--ここからlayout.blade.phpのyieldに当てはめる-->
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <h1>お店一覧</h1>

      <table>
        <tr>
            <th class='category'>カテゴリ</th><th>お店</th><th>住所</th><th>投稿者
            </th>
        </tr>
        @foreach ($shops as $shop)
          <tr>
              <td class='category'>{{ $shop->category->name }}</td><!--categoryモデルのnameカラム-->
              <td>
                    <a href={{ route('shop.detail', ['id' => $shop->id]) }}>
                        {{ $shop->name }}
                    </a>
              </td>
              <td>{{ $shop->address }}</td>
              <td>{{ $shop->user->name }}</td>
          </tr>
        @endforeach
      </table>

      @auth
      <div class = "newshop">
            <a href={{ route('shop.new') }} class='btn btn-outline-primary'>新しいお店</a>
      </div>
      @endauth

      
@endsection
<!--ここまでlayout.blade.phpのyieldに当てはめる-->
