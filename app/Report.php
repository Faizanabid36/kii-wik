<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded=[];
    public function comment()
    {
        return $this->belongsTo(TaskComment::class, 'report_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'report_id', 'id');
    }
    public function task()
    {
        return $this->belongsTo(Task::class, 'report_id', 'id');
    }
}
