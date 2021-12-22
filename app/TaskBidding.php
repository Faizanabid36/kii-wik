<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskBidding extends Model
{
    protected $guarded = [];
    public function task()
    {
        return $this->belongsTo('App\Task', 'task_id', 'id');
    }
    public function bidder()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
}

