<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deckrecipe;
use App\DeckrecipeReaction;
use Illuminate\Support\Facades\Auth;

class DeckrecipeReactionController extends Controller
{

    public function like(Deckrecipe $deckrecipe, Request $request)
    {
        $like=New DeckrecipeReaction();
        $like->deckrecipe_id=$deckrecipe->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }

    public function unlike(Deckrecipe $deckrecipe, Request $request)
    {
        $user=Auth::user()->id;
        $like=DeckrecipeReaction::where('deckrecipe_id',$deckrecipe->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
    //
}
