<?php

namespace MacsiDigital\CookieConsent\Providers;

use Illuminate\Support\ServiceProvider;
use MacsiDigital\CookieConsent\Console\Commands\InstallCommand;

class CookieConsentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'cookieConsent');

        $this->mergeConfigFrom(__DIR__.'/../../config/cookie-consent.php', 'cookie-consent');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'cookieConsent');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/cookie-consent.php' => config_path('cookie-consent.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../../resources/views' => base_path('resources/views/vendor/cookieConsent'),
            ], 'views');

            $this->publishes([
                __DIR__.'/../../resources/lang' => base_path('resources/lang/vendor/cookieConsent'),
            ], 'lang');

            // Registering package commands.
            $this->commands([
                InstallCommand::class,
            ]);
        }
        app('router')->pushMiddlewareToGroup('web', \MacsiDigital\CookieConsent\Http\Middleware\CookieConsent::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
