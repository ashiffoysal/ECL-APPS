<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentInvoice extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $maindata;
    
    public function __construct($maindata)
    {
        $this->maindata = $maindata;
    }

   
    public function build()
    {
        $maindata = $this->maindata;
        return $this->view('mail.paymentmail',compact('maindata'));
    }
}
