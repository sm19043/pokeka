<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeckrecipeComment extends Model
{
    use SoftDeletes;
     protected $fillable = [
        'deckrecipe_id',
        'user_id',
        'body'
    ];
    
    //
}
