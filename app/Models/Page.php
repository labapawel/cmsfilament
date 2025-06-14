<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'meta_description',
        'meta_keywords',
        'is_active',
        'is_menu',
        'parent_id',
    ];
}
