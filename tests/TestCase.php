<?php

namespace MacsiDigital\CookieConsent\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use MacsiDigital\CookieConsent\Http\Middleware\CookieConsent;
use MacsiDigital\CookieConsent\Providers\CookieConsentServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CookieConsentServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        view()->addLocation(__DIR__.'/stubs/views');
//        $app['config']->set('view.paths', [__DIR__.'/stubs/views']);
    }

    public function assertTranslationExists(string $key)
    {
        $this->assertTrue(trans($key) != $key, "Failed to assert that a translation exists for key `{$key}`");
    }

    protected function assertConsentDialogDisplayed(string $html)
    {
        $this->assertTrue($this->isConsentDialogDisplayed($html), 'Failed to assert that the consent dialog is displayed.');
    }

    protected function assertConsentDialogIsNotDisplayed(string $html)
    {
        $this->assertFalse($this->isConsentDialogDisplayed($html), 'Failed to assert that the consent dialog is not being displayed.');
    }

    protected function isConsentDialogDisplayed(string $html): bool
    {
        return \Illuminate\Support\Str::contains($html, [
            trans('cookieConsent::widget.description'),
            trans('cookieConsent::widget.accept_button'),
            trans('cookieConsent::widget.more_info_button'),
        ]);
    }
}