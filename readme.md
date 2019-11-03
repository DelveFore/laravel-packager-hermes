# PackagerHermes

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Laravel Packager Hermes enables usage of Artisan make commands for accelerating package development with [Jeroen-G's Laravel Packager](https://github.com/Jeroen-G/laravel-packager).

In other words, this is a wrapper around Laravel 5 Artisan commands that targets `packages/` created by [Jeroen-G's Laravel Packager](https://github.com/Jeroen-G/laravel-packager). With both of these tools, you can get to building and publishing your packages quickly!  

## Installation

Via Composer

``` bash
$ composer require delvefore/laravel-packager-hermes
```

Please note that this is specifically designed to work with the latest version of Laravel 5.
However, you'd like to use it with Laravel 5.4 and below use service provider in `config/app.php`:

```php
JeroenG\Packager\PackagerServiceProvider::class,
```


## Available Commands
### Make Controller
 
```bash
$ php artisan make:packager:controller MyVendor/MyPackage MyController 
```
All options are the same as with [Laravel's Artisan Make Controller](https://github.com/laravel/framework/blob/5.7/src/Illuminate/Routing/Console/ControllerMakeCommand.php#L176)

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email social@delvefore.com instead of using the issue tracker.

## Credits

- [johntimothybailey][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/delvefore/laravel-packager-hermes.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/delvefore/laravel-packager-hermes.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DelveFore/laravel-packager-hermes/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/delvefore/laravel-packager-hermes
[link-downloads]: https://packagist.org/packages/delvefore/laravel-packager-hermes
[link-travis]: https://travis-ci.org/DelveFore/laravel-packager-hermes
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/delvefore
[link-contributors]: ../../contributors]
