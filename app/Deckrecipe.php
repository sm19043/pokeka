<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Deckrecipe extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
        'title',
        'deck_code',
        'body',
        'user_id',
        'image_path'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
      //Categoryに対するリレーション
    //「1対多」の関係なので単数系に
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function reactions()
    {
        return $this->hasMany(DeckrecipeReaction::class, 'deckrecipe_id');
    }
    //
    //
}
