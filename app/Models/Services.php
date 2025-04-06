<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'is_active'
    ];
}
