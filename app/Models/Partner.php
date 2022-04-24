<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = ['name', 'email', 'password', 'phone', 'yard_name', 'time_open', 'time_close', 'address', 'active'];
    use HasFactory;
    public function yard()
    {
        return $this->belongsTo(Partner::class);
    }

}
