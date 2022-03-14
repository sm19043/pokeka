<?php

namespace App\Http\Controllers;

use App\Deckrecipe;

use App\DeckrecipeReaction;
use App\Http\Requests\DeckrecipeRequest;
use Illuminate\Support\Facades\Auth;
use Storage;



class DeckrecipeController extends Controller
{
    // デッキレシピのトップ画面に行く
    public function index(Deckrecipe $post)
    {

        // $user_id = Auth::id();
        
       
        $deckrecipes = Deckrecipe::all();
        
        return view('deckrecipe/index')->with(['deckrecipes' => $deckrecipe->getPaginateByLimit()]);   

    }
    
    //デッキレシピ投稿作成画面に行く
    public function create()
    {
        return view('deckrecipe/create');
    }
    
    //投稿をDBへ登録する
    public function store(Deckrecipe $post, DeckrecipeRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    // デッキレシピの詳細画面に行く
    public function show(Deckrecipe $post)
    {
        return view('deckrecipe/show')->with(['post' => $post]);
    }
    
    public function edit(Deckrecipe $post)
    {
        return view('deckrecipe/edit')->with(['post' => $post]);
    }

    
    //投稿の削除
    public function delete(Deckrecipe $deckrecipe)
    {
        $deckrecipe->delete();
        return redirect('/deckrecipe');
    }
    
    public function add()
    {
        return view('decrecipe/create');
    }

}
