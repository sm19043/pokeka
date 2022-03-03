<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deckrecipe extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
        'title',
        'deck_code',
        'body',
        'user_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //
}
