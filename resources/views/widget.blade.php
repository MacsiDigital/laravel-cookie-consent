@if($consent_required)

<div id="cookie-consent-banner" class="fixed inset-x-0 {{ config('cookie-consent.banner_position') }}-0" style="z-index:99999">
  <div class="bg-blue-600">
    <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
      <div class="flex flex-wrap items-center justify-between">
        <div class="flex items-center w-full md:w-7/12 lg:w-8/12 flex-shrink-0">
          <p class="ml-3 font-medium text-white w-full">
            {{ __('cookieConsent::widget.description') }}
          </p>
        </div>
        <div class="mt-2 w-full md:w-5/12 lg:w-4/12 flex-shrink-0">
          <div class="w-full rounded-md shadow-sm flex justify-end">
            <a href="{{ config('cookie-consent.cookie_policy_url') }}" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-500 hover:bg-red-600 hover:text-white focus:outline-none focus:shadow-outline transition ease-in-out duration-150 mr-2 font-semibold">
              {{ __('cookieConsent::widget.more_info_button') }}
            </a>
            <a onclick="cookieConsent()" class="cursor-pointer flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-500 hover:bg-green-600 hover:text-white focus:outline-none focus:shadow-outline transition ease-in-out duration-150 font-semibold">
              {{ __('cookieConsent::widget.accept_button') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
	function cookieConsent(){
		axios.get('/cookie-consented')
            .then(response => {
                var consentBox = document.getElementById('cookie-consent-banner');
					consentBox.style.display = 'none'; //or
					consentBox.style.visibility = 'hidden';
            });
	}
</script>

@endif
