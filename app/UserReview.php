<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo('App\User','to_user_id','id');
    }
}
