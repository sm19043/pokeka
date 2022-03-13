@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
       
    </head>
    
    <body class="game">
        <h1 class='game'>デッキレシピ</h1>
        @if( Auth::check() )
        <a href='/deckrecipe/create'>新規投稿作成</a>
        @endif
        </h2>
        <div class='newdeckrecipe'>
            <!--@のなか繰り返し-->
            @foreach ($deckrecipes as $deckrecipe)
            <div class=''>
                <!--タイトル-->
                <h2 class='title, game'>
                <a href="/deckrecipe/{{ $deckrecipe->id }}">{{ $deckrecipe->title }}</a>
                <!--ユーザー名-->
                <h3 class=''>{{ $deckrecipe->user->name }}</h3>
                <!--デッキコード-->
                <p class=''>{{ $deckrecipe->deck_code }}</p>
                <!--本文-->
                <p class=''>{{ $deckrecipe->body }}</p>
                @if ($deckrecipe->image_path)
                <!-- 画像を表示 -->
                <img src="{{ $deckrecipe->image_path }}">
                @endif
                @if ($user_id == $deckrecipe->user_id)
                <!--編集-->
                <p class="edit">[<a href="/deckrecipe/{{ $deckrecipe->id }}/edit">編集</a>]</p>
                <!--削除-->
                <form action="/deckrecipe/{{ $deckrecipe->id }}" id="form_{{ $deckrecipe->id }}" method="post" style="desplay:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
                @endif
            </div>
            @endforeach
        </div>
        <!--ページネーション-->
        <div class='paginate'>
            {{ $deckrecipes->links() }}
        </div>
        
        
    </body>
    
</html>
@endsection