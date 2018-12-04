<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = 'following_project_user';
    protected $fillable = [
        'user_id',
        'project_id',
        'feedback_id',
        'country',
        'name',
        'address',
        'note'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
