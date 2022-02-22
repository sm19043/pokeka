<?php

namespace App\Http\Controllers;

use App\Deckrecipe;
use Illuminate\Http\Request;

class DeckrecipeController extends Controller
{
    public function index()
    {
        return view('deckrecipe/index');   
    }
    //
}
