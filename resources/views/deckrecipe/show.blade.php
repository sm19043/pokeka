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
            {{ $deckrecipe->title }}
        </h1>
        <!--デッキコード-->
        <h1 class="title">
            {{ $deckrecipe->deck_code }}
        </h1>
        <!--本文-->
        <div class="content">
            <div class="content__deckrecipe">
                <p>{{ $deckrecipe->body }}</p>
            </div>
        </div>
         @if ($deckrecipe->image_path)
            <!-- 画像を表示 -->
            <img src="{{ $deckrecipe->image_path }}">
        @endif
        <!--戻る-->
        <div class="footer">
            <a href="/deckrecipe">戻る</a>
        </div>
        
        
        
        
    </body>
    
        
</html>
@endsection