<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'fundraiser',
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
}
