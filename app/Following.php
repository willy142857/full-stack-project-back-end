<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
    protected $table = 'following_project_user';
    protected $fillable = [
        'user_id',
        'project_id'
    ];
}
