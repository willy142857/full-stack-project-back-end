<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //FIXME: email password 不可為fillable
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'sex',
        'birth',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function followingFeedbacks()
    {
        return $this->belongsToMany(Feedback::class,'following_project_user','user_id','feedback_id');
    }

    public function followingProjects()
    {
        return $this->belongsToMany(Project::class,'following_project_user','user_id','project_id');
    }

    public function followingProjectsFeedback($id)
    {
        return $this->belongsToMany(Project::class,'following_project_user','user_id','project_id','feedback_id')->where('project_id','=',$id);
    }

    public function raisingProjects()
    {
        return $this->belongsToMany(Project::class,'raising_project_user','user_id','project_id');
    }
}
