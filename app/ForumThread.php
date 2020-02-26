<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumThread extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug', 'content',
    ];
}
