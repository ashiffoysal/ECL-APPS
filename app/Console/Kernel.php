<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\DuePaymentAlert;

class Kernel extends ConsoleKernel
{
   protected $commands=[
       DuePaymentAlert::class,
       ];
    protected function schedule(Schedule $schedule)
    {
        //  $schedule->command('invoice:dailysend')->daily();
         $schedule->command('queue:work')->everyFiveMinutes();
        //  $schedule->command('due:paymentalert')->daily();
    }

   
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
