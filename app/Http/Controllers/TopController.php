<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Top;

class TopController extends Controller
{
    //トップ画面に行く
     public function index(Top $post)
    {
        return view('top/index'); 
    }
    //
}
