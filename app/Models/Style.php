<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Style extends Model
{
    protected $fillable = [
        'title',
        'short_title',
        'slug',
        'description',
        'content',
        'variant_code'
    ];
}
