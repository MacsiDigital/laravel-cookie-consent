<?php

namespace MacsiDigital\CookieConsent\Test\Feature;

use MacsiDigital\CookieConsent\Http\Middleware\CookieConsent;
use MacsiDigital\CookieConsent\Test\TestCase;

class ConsentTest extends TestCase
{
    /** @test */
    public function it_provides_translations()
    {
        $this->assertTranslationExists('cookieConsent::widget.description');
        $this->assertTranslationExists('cookieConsent::widget.accept_button');
        $this->assertTranslationExists('cookieConsent::widget.more_info_button');
    }

    /** @test */
    public function it_can_display_a_cookie_consent_view()
    {
        (new CookieConsent)->handle(request(), function () {
            return ;
        });
        
        $html = view('layout')->render();

        $this->assertConsentDialogDisplayed($html);
    }

    /** @test */
    public function it_will_not_show_the_cookie_consent_view_when_the_package_is_disabled()
    {
        $this->app['config']->set('cookie-consent.enabled', false);
        (new CookieConsent)->handle(request(), function () {
            return ;
        });
        $html = view('layout')->render();

        $this->assertConsentDialogIsNotDisplayed($html);
    }

    /** @test */
    public function it_will_not_show_the_cookie_consent_view_when_the_user_has_already_consented()
    {
        request()->cookies->set(config('cookie-consent.cookie_name'), cookie(config('cookie-consent.cookie_name'), 1));
        (new CookieConsent)->handle(request(), function () {
            return ;
        });
        $html = view('layout')->render();

        $this->assertConsentDialogIsNotDisplayed($html);
    }
}
