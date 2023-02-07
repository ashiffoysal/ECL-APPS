<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidateExam extends Mailable
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
        // return $this->view('mail.gcseexambookingconfirm',compact('maindata'));
        
        
        $email = $this->markdown('mail.gcseexambookingconfirm')->with('maindata', $this->maindata);

        $attachments = [
            // first attachment
            asset('\uploads\exambookingconfirmation.IFC-Written_Examinations_2022_FINAL.pdf'),
            
            

            
        ];

        // $attachments is an array with file paths of attachments
        foreach ($attachments as $filePath) {
            $email->attach($filePath);
        }

        return $email;
    }
    
    
 
   
}
