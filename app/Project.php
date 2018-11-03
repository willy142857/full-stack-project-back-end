<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
