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
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__title'>
                    <h2>デッキコード</h2>
                    <input type='text' name='post[title]' value="{{ $post->deck_code }}">
                </div>
                <div class='content__body'>
                    <h2>デッキ説明</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
                
                
            </form>
            
        </div>
        
        
    </body>
    
        
</html>
@endsection