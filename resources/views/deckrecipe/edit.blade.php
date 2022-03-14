@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
   
    </head>
    
    <body class="game">
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/deckrecipe/{{ $deckrecipe->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='deckrecipe[title]' value="{{ $deckrecipe->title }}">
                </div>
                <div class='content__title'>
                    <h2>デッキコード</h2>
                    <input type='text' name='deckrecipe[title]' value="{{ $deckrecipe->deck_code }}">
                </div>
                <div class='content__body'>
                    <h2>デッキ説明</h2>
                    <input type='text' name='deckrecipe[body]' value="{{ $deckrecipe->body }}">
                </div>
                 @if ($deckrecipe->image_path)
                <!-- 画像を表示 -->
                <img src="{{ $deckrecipe->image_path }}">
                <input type="file" name="deckrecipe[image_path]">
                @endif
                <input type="submit" value="保存">
                <div class="back">[<a href="/deckrecipe">戻る</a>]</div>
                
            </form>
            
        </div>
        
        
    </body>
    
        
</html>
@endsection