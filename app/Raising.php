<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raising extends Model
{
    protected $table = 'raising_project_user';
    protected $fillable = [
        'user_id',
        'project_id'
    ];
}
