<?php

namespace App\Console\Commands\Log;

use Illuminate\Console\Command;

class ClearLogFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    php artisan log:clear

    protected $signature = 'log:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear Laravel log';

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
    public function handle(): int
    {
        exec('echo "" > ' . storage_path('logs/laravel.log'));
        $this->info('Logs have been cleared');
        return true;
    }
}
