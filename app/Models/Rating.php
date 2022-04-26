<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'rating', 'comment', 'is_active'];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'ratings';
}
