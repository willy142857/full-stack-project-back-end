<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'fundraiser',
        'raising_user_id',
        'email',
        'name',
        'category_id',
        'brief',
        'started_at',
        'ended_at',
        'curr_amount',
        'goal_amount',
        'backer',
        'description',
        'img_path',
        'relative_web',
    ];

    protected $dates = [
        'ended_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function followingUsers()
    {
        return $this->belongsToMany(User::class,'following_project_user','project_id','user_id');
    }

    public function raisingUser()
    {
        return $this->belongsTo(User::class,'raising_user_id');
    }
    public function followings()
    {
        return $this->hasMany(Following::class);
    }
}
