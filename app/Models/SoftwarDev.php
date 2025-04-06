<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoftwarDev extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'technologies',
        'slug',
        'is_active'
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
