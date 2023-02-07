<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ExamRequest;
use Mail;
use Carbon\Carbon;
use PDF;

class InvoiceDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invoice:dailysend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'invoice dailysend command';

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
       
         $mainuser=ExamRequest::where('is_deleted',1)->where('is_completed_from',1)->whereDate('created_at', Carbon::today())->get();
        
        foreach($mainuser as $user){
           
                     
        $data=ExamRequest::where('booking_id', $user->booking_id)->first();
            $pdf = PDF::loadView('invoice.index',compact('data'))->setOptions(['defaultFont' => 'sans-serif','dpi' => 150,'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,'isPhpEnabled' => true,]);
            
            $datas["email"] = $data->email;
            $datas["title"] = "Welcome to ECL";
            $datas["body"] = "This is the email body.";
            
               Mail::send("mail.invoicesendmail", $datas, function ($message) use ($datas, $pdf) {
             
                 $message->to($datas["email"])
                    ->subject("ECL Invoice")
                    ->attachData($pdf->output(), "Invoice.pdf");
            });
            
             dd ("email send successfully !!");
            
        }
    }
}
