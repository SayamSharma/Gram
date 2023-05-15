<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Log;

class MyCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:my-cron-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('My Cron Job Ran!');
        // Log::Alert('My Cron Job Ran!');
    }
}
