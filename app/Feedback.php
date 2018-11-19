<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'date',
        'price',
        'description',
        'img_path',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
