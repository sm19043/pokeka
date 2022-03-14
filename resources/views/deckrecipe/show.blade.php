@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>

        
    </head>
    
    <body class="game">
        <!--タイトル-->
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <!--デッキコード-->
        <h1 class="title">
            {{ $post->deck_code }}
        </h1>
        <!--本文-->
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <!--戻る-->
        <div class="footer">
            <a href="/deckrecipe">戻る</a>
        </div>
        
        
        
        
    </body>
    
        
</html>
@endsection