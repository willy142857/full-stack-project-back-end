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
        'feedback',
        'comment',
        'relative_web',
        'img_path',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
