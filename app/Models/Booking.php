<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = ['id','user_id','name','type_yard','date','time','end_time','time_da','address','email','phone','total_price','pay_booblean'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function yard()
    {
        return $this->belongsTo(Yard::class);
    }
}
