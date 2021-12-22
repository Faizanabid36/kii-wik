<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use SoftDeletes;

    protected $guarded = [];

    protected $with = ['user', 'taskAttachments', 'task_comments'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function taskBiddings()
    {
        return $this->hasMany(TaskBidding::class, 'task_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'report_id', 'id');
    }
    public function taskAssignees()
    {
        return $this->hasMany(TaskAssignee::class, 'task_id', 'id');
    }
    public function taskers()
    {
        return $this->belongsToMany(User::class,'task_assignees','task_id', 'user_id');
    }
    public function taskAttachments()
    {
        return $this->hasOne(TaskAttachment::class, 'task_id', 'id');
    }

    public function task_comments()
    {
        return $this->hasMany(TaskComment::class, 'task_id', 'id');
    }
   
}
