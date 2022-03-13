<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeckrecipeReaction extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
        'user_id',
        'deckrecipe_id'
    ];
    
    //
}
