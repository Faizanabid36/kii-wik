<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskComment extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'report_id', 'id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function childComments()
    {
        return $this->hasMany(self::class, 'reply_id', 'id');
    }

    public function parentComment()
    {
        return $this->belongsTo(self::class, 'reply_id', 'id');
    }
}
