<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['description','user_id','yard_id','blog_id'];
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function yard()
    {
        return $this->belongsTo(Yard::class);

    }
    public function blog()
    {
        return $this->belongsTo(Blog::class);

    }
}
