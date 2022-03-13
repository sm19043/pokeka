@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
   
    </head>
    
    <body class="game">
        <h1>デッキレシピ投稿</h1>
        <from action="/deckrecipe" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="例： アルセウスVsterデッキ など"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="title">
                <h2>デッキコード</h2>
                <input type="text" name="post[deck_code]" placeholder=ポケカトレーナーズクラブで発行できるよ！！/>
            </div>
            <div class="body">
                <h2>デッキ説明</h2>
                <textarea name="post[body]" placeholder="デッキの理想の動きやどういう強みがあるのか、コンセプトなどを書いてね！"></textarea>
            </div>
            <input type="submit" value="投稿"/>
        </from>
        <div class="back">[<a href="/deckrecipe">戻る</a>]</div>
        
        
                
    </body>
    
        
</html>
@endsection