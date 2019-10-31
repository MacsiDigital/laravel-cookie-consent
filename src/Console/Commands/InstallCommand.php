<?php

namespace MacsiDigital\CookieConsent\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\DetectsApplicationNamespace;

class InstallCommand extends Command
{
    use DetectsApplicationNamespace;

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
