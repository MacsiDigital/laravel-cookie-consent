@if($consent_required)

<div id="cookie-consent" style="position:fixed;bottom:0;left:0;right:0;background-color:gray;padding-top:10px;padding-bottom:10px;color:white;display:flex;align-items: center;justify-content: center;">
	<div style="width:40%;">
		<p style="margin:0px;padding-bottom:5px;">{{ __('cookieConsent::widget.description') }}</p>
	</div>
	<div style="width:35%;text-align:center;">
		<p style="margin:0px;padding-bottom:5px;"><a style="display:inline-block;margin-right:20px;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;background-color:white;color:black;text-decoration:none;" href="/cookie-policy">{{ __('cookieConsent::widget.more_info_button') }}</a> <a style="display:inline-block;margin-right:20px;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;background-color:blue;color:white;text-decoration:none;font-weight:bold;cursor:pointer;" onclick="cookieConsent()">{{ __('cookieConsent::widget.accept_button') }}</a></p>
	</div>
</div>

<script>
	function cookieConsent(){
		var xhr = new XMLHttpRequest();
		xhr.open('GET', '{{ url("/cookie-consented") }}', true);
		xhr.send();

		var consentBox = document.getElementById('cookie-consent');
		consentBox.style.display = 'none'; //or
		consentBox.style.visibility = 'hidden';
	}
</script>

@endif