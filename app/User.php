<?php

namespace App;

//use Chatify\Http\Models\Message;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];
    protected $with = ['location'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            if ($user->id != 1 && $user->id != 2) {
                Message::create([
                    'type'=>'user',
                    'id' => mt_rand(9, 999999999) + time(),
                    'from_id' => 1,
                    'to_id' => $user->id,
                    'body' => 'Kii-wik Pro Contact Support Team. Write your queries here'
                ]);
            }
        });
    }
    public function messages()
    {
        return $this->hasMany(Message::class, 'to_id', 'id');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->name . " " . $this->lastname;
    }

    public function userReviews()
    {
        return $this->hasMany('App\UserReview','to_user_id','id');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'user_skills', 'user_id', 'skill_id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'report_id', 'id');
    }
    public function tasks()
    {
        return $this->hasMany('App\Task', 'user_id', 'id');
    }
    public function docs()
    {
        return $this->hasMany('App\VerificationDocument','user_id','id');
    }
    public function qualification()
    {
        return $this->hasOne('App\UserQualification', 'user_id');
    }

    public function location()
    {
        return $this->hasOne(UserLocation::class);
    }
    public function portfolio()
    {
        return $this->hasMany('App\UserPortfolio', 'user_id', 'id');
    }
    public function biddings()
    {
        return $this->hasMany('App\TaskBidding', 'user_id', 'id');
    }
    public function assignedTasks()
    {
        return $this->belongsToMany(Task::class,'task_assignees', 'user_id', 'task_id');
    }
}
