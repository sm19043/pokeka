@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
   
    </head>
    
    <body class="game">
        <h1>デッキレシピ投稿</h1>
        <form action="/deckrecipe" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="deckrecipe[title]" placeholder="例： アルセウスVsterデッキ など"/>
                <p class="title__error" style="color:red">{{ $errors->first('deckrecipe.title') }}</p>
            </div>
            <div class="title">
                <h2>デッキコード</h2>
                 <input type="text" name="deckrecipe[deck_code]" placeholder=ポケカトレーナーズクラブで発行できるよ！！/>
            </div>
            <div class="body">
                <h2>デッキ説明</h2>
                <textarea name="deckrecipe[body]" placeholder="デッキの理想の動きやどういう強みがあるのか、コンセプトなどを書いてね！"></textarea>
            </div>
            <h2>デッキ画像</h2>
            <!-- アップロードフォームの作成 -->
            <input type="file" name="deckrecipe[image_path]">
            <input type="submit" value="投稿"/>
        </form>
        <div class="back">[<a href="/deckrecipe">戻る</a>]</div>
        
        
                
    </body>
    
        
</html>
@endsection