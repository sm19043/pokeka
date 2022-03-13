@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
       
    </head>
    
    <body class="game">
        <h1 class='game'>デッキレシピ</h1>
        <a href='/deckrecipe/create'>新規投稿作成</a>
        </h2>
        <div class='newpost'>
            <!--@のなか繰り返し-->
            @foreach ($posts as $post)
            <div class=''>
                <!--タイトル-->
                <h2 class='title, game'>
                <a href="/deckrecipe/{{ $post->id }}">{{ $post->title }}</a>
                <!--ユーザー名-->
                <h3 class=''>{{ Auth::user()->name }}</h3>
                <!--デッキコード-->
                <p class=''>{{ $post->deck_code }}</p>
                <!--本文-->
                <p class=''>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
        <!--ページネーション-->
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
        
    </body>
    
</html>
@endsection