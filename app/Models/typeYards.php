<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeYards extends Model
{
    use HasFactory;
    protected $table = 'types_yard';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'type',
    ];
}
