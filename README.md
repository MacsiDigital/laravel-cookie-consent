# Laravel package for Cookie Consent

## A little package for the EU cookie consent law 
 
![Header Image](https://github.com/MacsiDigital/repo-design/raw/master/laravel-cookie-consent/header.png)

<p align="center">
 <a href="https://github.com/MacsiDigital/laravel-cookie-consent/actions?query=workflow%3Atests"><img src="https://github.com/MacsiDigital/laravel-cookie-consent/workflows/Run%20tests/badge.svg" style="max-width:100%;" alt="tests badge"></a>
 <a href="https://packagist.org/packages/macsidigital/laravel-cookie-consent"><img src="https://img.shields.io/packagist/v/macsidigital/laravel-cookie-consent.svg?style=flat-square" alt="version badge"/></a>
 <a href="https://packagist.org/packages/macsidigital/laravel-cookie-consent"><img src="https://img.shields.io/packagist/dt/macsidigital/laravel-cookie-consent.svg?style=flat-square" alt="downloads badge"/></a>
</p>

A little package to handle cookie consent.  All EU sites or sites targeted at EU citizens must comply with the european law, requesting consent to add cookies to the users comupter.

## Support us

We invest a lot in creating [open source packages](https://macsidigital.co.uk/open-source), and would be grateful for a [sponsor](https://github.com/sponsors/MacsiDigital) if you make money from your product that uses them.

## Installation

This package can be used in Laravel 6.0 or higher.

You can install the package via composer:

``` bash
composer require macsidigital/laravel-cookie-consent
```

We then need to install the assets:

``` bash
php artisan cookieconsent:install
```

This will publish a config file, the views and language files

### AJAX Requests and Styling

Out of the box we use axios to make the AJAX request, this can be changed by editing the blade template.

We also use Tailwind CSS for styling, again this can be changed by editing the template.

If you want to use the defaults, then you will need to import the required dependencies.

## Usage

To use we just need to add a blade include just before the end body tag

``` php
@include('cookieConsent::widget')
```

To amend the design just go into the resources views folder and amend 'widget.blade.php'.  Note we have used inline styles so that we are not reliant on any design framework.  But we would recommend changing this to use something like tailwind.

Finally the more info will try to direct to a route '/cookie-policy', you will need to create this route yourself in your routes file, as well as the template file that lists your cookie policy.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email [info@macsi.co.uk](mailto:info@masi.co.uk) instead of using the issue tracker.

## Credits

- [Macsi Digital](https://github.com/macsidigital)
- [Colin Hall](https://github.com/colinhall17)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
