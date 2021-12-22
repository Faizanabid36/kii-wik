<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskAttachment extends Model
{
    protected $guarded = [];
    public function task()
    {
        return $this->belongsTo('App\Task', 'task_id', 'id');
    }
}
