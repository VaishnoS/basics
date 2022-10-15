<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetAppName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get_app_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get App Name';

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
        $app_name = config('app.name');
        $this->info("The App Name is $app_name");
    }
}
