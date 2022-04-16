<?php

namespace App\Booking;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use App\Models\Yard;
class TimeSlotGenerator
{
    protected $interval,$now;

    public function __construct(Yard $yard)
    {

        $this->interval = CarbonInterval::hours(1)->minutes(30)
            ->toPeriod(
                $yard->time_open,
                $yard->time_close
            );
        $this->now = Carbon::now();
    }
    public function get(){
        return $this->interval;
    }
    public function getNow(){
        return $this->now;
    }
}
