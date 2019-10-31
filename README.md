# Laravel package for Cookie Consent

A little package to handle cookie consent.  All EU sites or sites targeted at EU citizens must comply with the most crazy european law of all, requesting consent to add cookies to the users comupter.

### Installation

This package can be used in Laravel 6.0 or higher.

You can install the package via composer:

``` bash
composer require macsidigital/laravel-cookie-consent
```

The service provider will automatically get registered. Or you may manually add the service provider in your config/app.php file.

We then need to install the assets:

``` bash
php artisan cookieconsent:install
```

This will publish a config file, the views and language files

## Usage

To use we just need to add a blade include just before the end body tag

``` php
@include('cookieConsent::widget')
```

To amend the design just go into the resources views folder and amend 'widget.blade.php'.  Note we have used inline styles so that we are not reliant on any design framework.  But we would recommend changing this to use something like tailwind.

Finally the more info will try to direct to a route '/cookie-policy', you will need to create this route yourself in your routes file, as well as the template file that lists your cookie policy.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email colin@macsi.co.uk instead of using the issue tracker.

## Credits

- [Macsi Digital](https://github.com/macsidigital)
- [Colin Hall](https://github.com/colinhall17)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.