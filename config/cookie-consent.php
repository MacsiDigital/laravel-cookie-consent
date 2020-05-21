<?php

return [

    /*
     * setting to enable the dialogue box.
     */
    'enabled' => env('COOKIE_CONSENT_ENABLED', true),

    /*
     * Cookie name to save if user consented
     */
    'cookie_name' => 'laravel_cookie_consent',

    /*
     * Cookie duration in minutes. Default is 60 * 24 * 365 * 5. (5 years)
     */
    'cookie_duration' => 60 * 24 * 365 * 5,

    /*
     * Banner position, either top or bottom
     */
    'banner_position' => 'bottom',
    
    /*
     * URL to the cookie policy
     */
    'cookie_policy_url' => '/cookie-policy',
];