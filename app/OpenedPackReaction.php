<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpenedPackReaction extends Model
{
    use SoftDeletes;
    
     protected $fillable = [
        'users_id',
        'opened_pack_id'
    ];
    
    //
}
