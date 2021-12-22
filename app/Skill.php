<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class,'user_skills','user_id','skill_id');
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
