<?php

namespace App\Booking;
use Carbon\Carbon;
use Carbon\CarbonInterval;
class BookingCalendar {
    public function mount(){
        $this->calendarStartDate = now();

    }
    public function getCalendarWeekIntervalProperty(){
        return CarbonInterval::day(1)
        ->toPeriod(
            $this->calendarStartDate,
            $this->calendarStartDate->clone()->addWeek()
        );
    }
}


?>
