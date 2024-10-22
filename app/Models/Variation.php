<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Variation extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code',
        'preview',
    ];

    protected function casts(): array
    {
        return [
            'preview' => 'array',
        ];
    }

    public function style(): belongsToMany
    {
        return $this->belongsToMany(Style::class);
    }
}
