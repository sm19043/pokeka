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
    public function index(Deckrecipe $deckrecipe)
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
    public function store(Deckrecipe $deckrecipe, DeckrecipeRequest $request)
    {
        $input = $request['deckrecipe'];
        
        if ($request->hasFile('image_path')) {
        //s3アップロード開始
        $image = $input['image_path'];
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        // アップロードした画像のフルパスを取得
        $input['image_path']= Storage::disk('s3')->url($path);
        }
        
        //ログイン中のユーザーIDの取得
        $input['user_id'] = Auth::id();
        //$inputの内容を$deckrecipeに保存
        $deckrecipe->fill($input);
        
        $deckrecipe->save();
        
        // $post->fill($input,$user_id)->save();
        return redirect('/deckrecipe/' . $deckrecipe->id);
    }
    
    // デッキレシピの詳細画面に行く
    public function show(Deckrecipe $deckrecipe)
    {
        return view('deckrecipe/show')->with(['deckrecipe' => $deckrecipe]);
    }
    
    //デッキレシピ編集画面に行く
    public function edit(Deckrecipe $deckrecipe)
    {
        return view('deckrecipe/edit')->with(['deckrecipe' => $deckrecipe]);
    }
    
    //変更内容を更新
    public function update(DeckrecipeRequest $request, Deckrecipe $deckrecipe)
    {
        $input_deckrecipe = $request['deckrecipe'];
        $deckrecipe->fill($input_deckrecipe)->save();
        
        return redirect('/deckrecipe/' . $deckrecipe->id);
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
    
    //
}
