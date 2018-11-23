<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable =[
        'user_id',
        'project_id',
        'rating',
        'comment',
    ];

    function project()
    {
        return $this->belongsTo(Project::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
