@extends('layout')<!--layout.blade.phpを指定-->

<!--ここからlayout.blade.phpのyieldに当てはめる-->
@section('content')

      <h1>{{ $shop->name }}</h1>
      <div>
          <p>{{ $shop->category->name }}</P>
          <p>{{ $shop->address }}</P>
      </div>

      <iframe id='map'
          src='https://www.google.com/maps/embed/v1/place?key=AIzaSyAI2J8ko_i3GrtxgaegE9Ocmq00mymz5rU&q={{ $shop->address }}'
          width='70%'
          heigth='320'
          frameborder='0'>
      </iframe>

      <div>
          <a href={{ route('shop.list') }}>一覧に戻る</a>
          @auth
                @if ($shop->user_id === $login_user_id)
                        | <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
                        <p></p>
                        {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
                                {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
                        {{ Form::close() }}
                @endif
          @endauth
      </div>
@endsection
<!--ここまでlayout.blade.phpのyieldに当てはめる-->
