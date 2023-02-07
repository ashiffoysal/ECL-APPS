<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExamBookingDetailsForAdmin extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $maindata;
    public function __construct($maindata)
    {
       $this->maindata = $maindata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $maindata = $this->maindata;
        return $this->view('mail.bookingdetailsforadmin',compact('maindata'));
    }
}
