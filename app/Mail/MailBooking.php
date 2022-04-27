<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;
class MailBooking extends Mailable
{
    use Queueable, SerializesModels;
    public $thembookings;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $thembookings)
    {
        $this->thembookings = $thembookings;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.bookings')->with('thembookings', $this->thembookings);
    }
}
