<?php

namespace App\Booking;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Models\Yard;
class TimeFilter
{
    protected $interval;

    public function __construct()
    {
        $open = Carbon::createFromFormat('H:i', '08:00');
        $close = Carbon::createFromFormat('H:i', '22:00');

        $this->interval = CarbonInterval::hours(1)->minutes(30)
            ->toPeriod(
                $open,
                $close
            );
    }
    public function get(){
        return $this->interval;
    }

}
