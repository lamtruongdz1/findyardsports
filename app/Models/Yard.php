<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Str;
use app\models\booking;
class Yard extends Model
{

    use HasFactory;

    protected $table = 'yards';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'slug',
        'img',
        'view',
        'total_booking',
        'address',
        'description',
        'time_open',
        'time_close',
        'id_districts',
        'status',
    ];
    protected $casts = [
        'img' => 'array',
        'status' => 'boolean',
    ];

    public function district()
    {
        return $this->belongsTo(District::class,'id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function partner()
    {
        return $this->hasOne(Partner::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($yard) {

            $yard->slug = $yard->createSlug($yard->name);

            $yard->save();
        });
    }
    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {

            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
    public function incrementReadCount() {
        $this->view++;
        return $this->save();
    }

}
