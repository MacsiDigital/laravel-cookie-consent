<?php

Route::get('/cookie-consented', function(){
	$response = new Illuminate\Http\Response('Success');
    $response->withCookie(cookie(config('cookie-consent.cookie_name'), 'true', config('cookie-consent.cookie_duration')));
    return $response;
});