<?php

namespace MacsiDigital\CookieConsent\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cookieconsent:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Cookie Consent';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Publishing Cookie Consent Assets and Configs...');
        $this->callSilent('vendor:publish', ['--provider' => 'MacsiDigital\CookieConsent\Providers\CookieConsentServiceProvider']);
        $this->info('Cookie consent installed successfully.');
    }
}
