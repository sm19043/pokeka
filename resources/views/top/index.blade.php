@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale() ) }}">
    <head>
        <meta charset="utf-8"> <!--エンコードの種類-->
        <title>PokekaMAG</title>
   
    </head>
    
    <body class="game">
        
        <a href='/deckrecipe'>デッキレシピTOP</a>
        
    </body>
    
        
</html>
@endsection