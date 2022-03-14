<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/deckrecipe', 'DeckrecipeController@index'); //デッキレシピのトップ画面

Route::get('/deckrecipe/create', 'DeckrecipeController@create'); //デッキレシピ投稿作成画面

Route::post('/deckrecipe', 'DeckrecipeController@store'); //投稿を保存

Route::get('/deckrecipe/like/{deckrecipe}', 'DeckrecipeReactionController@like')->name('like');//いいね

Route::get('/deckrecipe/unlike/{deckrecipe}', 'DeckrecipeReactionController@unlike')->name('unlike');//いいね取り消し

Route::get('/deckrecipe/{deckrecipe}/edit', 'DeckrecipeController@edit'); //投稿を編集画面へ


Route::put('/deckrecipe/{deckrecipe}', 'DeckrecipeController@update'); //投稿編集を実行

Route::get('/deckrecipe/{deckrecipe}', 'DeckrecipeController@show'); //デッキレシピ詳細画面

Route::delete('/deckrecipe/{deckrecipe}', 'DeckrecipeController@delete');//デッキレシピ削除

Route::get('/home','HomeController@');

// Route::get('/', function () {
//     return view('index');
// })->name('login');



Route::group(['middleware' => ['auth']], function(){
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
