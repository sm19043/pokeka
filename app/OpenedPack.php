<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpenedPack extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'body',
        'category_id',
        'user_id'
    ];
    
    
    
    //Categoryに対するリレーション

    //「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //
}
