<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Font extends Model
{
    use Searchable;
    protected $fillable = [
        'name',
        'slug',
        'url',
        'author',
        'format',
        'icon'
    ];

    protected $appends = [
        'demo_text'
    ];

    public function getDemoTextAttribute()
    {
        return fake()->paragraph(1);
    }
}
