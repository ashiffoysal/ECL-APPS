<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ExamRequest;
use Mail;
use App\Mail\DuePayment;

class DuePaymentAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'due:paymentalert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Due Payment Alert';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
         $mainuser=ExamRequest::where('is_deleted',1)->where('is_completed_from',1)->where('is_paid',0)->get();
        
        foreach($mainuser as $user){
             Mail::to($user->email)->send(new DuePayment($user));
        }
    }
}
