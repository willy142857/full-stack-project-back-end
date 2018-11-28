<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'project_id',
        'date',
        'price',
        'description',
        'img_path',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function followingUsers()
    {
        return $this->belongsToMany(User::class,'following_project_user','feedback_id','user_id');
    }

    public function followings()
    {
        return $this->hasMany(Following::class);
    }
}
