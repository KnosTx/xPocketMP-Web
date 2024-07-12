<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('d', function () {
    $this->call('down');
    $this->info('Application is now in maintenance mode.');
});

Artisan::command('u', function () {
    $this->call('up');
    $this->info('Application is now up.');
});