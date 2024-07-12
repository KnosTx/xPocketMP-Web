<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MaintenanceMode extends Command
{
    protected $signature = '{action=down}';
    protected $description = 'Put the application into maintenance mode or bring it out of maintenance mode';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $action = $this->argument('action');

        if ($action === 'd') {
            $this->call('down');
            $this->info('Application is now in maintenance mode.');
        } elseif ($action === 'u') {
            $this->call('up');
            $this->info('Application is now up.');
        } else {
            $this->error('Invalid action. Use "d" for down or "u" for up.');
        }
    }
}