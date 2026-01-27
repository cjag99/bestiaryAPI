<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestiary extends Model
{
    protected $fillable = [
        'name',
        'species',
        'danger_level',
        'habitat',
        'traits',
        'is_hostile'
    ];

    protected $casts = [
        'traits' => 'array',
        'is_hostile' => 'boolean',
        'danger_level' => 'integer'
    ];
}
