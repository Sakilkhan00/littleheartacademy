<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ComanyReview;

class ClientCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'client:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $data = ComanyReview::find(1);

        $happy_clients = (int)$data->happy_clients + 3;
        $projects_done = (int)$data->projects_done + 2;

        $rv = ComanyReview::find(1);
        $rv->happy_clients = $happy_clients;
        $rv->projects_done = $projects_done;
        $rv->save();
        \Log::info("Cron is working fine!");
    }
}
