# ACF Fluent Helpers

![Latest Stable Version](https://img.shields.io/packagist/v/log1x/acf-fluent-helpers?style=flat-square)
![Total Downloads](https://img.shields.io/packagist/dt/log1x/acf-fluent-helpers?style=flat-square)

This is a simple set of helper functions for [ACF Fluent](https://github.com/samrap/acf-fluent) similar to the [`helpers.php`](https://github.com/samrap/acf-fluent/blob/master/src/helpers.php) shipped with ACF Fluent, but is auto-loaded by Composer instead of having to be manually included.

It also uses really generic function names because I'm naughty. :wink:

## Requirements

Make sure all dependencies have been installed before moving on:

- [PHP](https://secure.php.net/manual/en/install.php) >= 7.0
- [Composer](https://getcomposer.org/download/)
- [ACF Fluent](https://github.com/samrap/acf-fluent)

## Installation

Install via Composer:

```bash
$ composer require log1x/acf-fluent-helpers:dev-master
```

## Usage

```php
$field    = field('example')->get();
$subfield = sub('example')->get();
$option   = option('example')->get();
```

## Bug Reports

If you discover a bug in ACF Fluent Helpers, please [open an issue](https://github.com/log1x/acf-fluent-helpers/issues).

## Contributing

Contributing whether it be through PRs, reporting an issue, or suggesting an idea is encouraged and appreciated.

## License

ACF Fluent Helpers is provided under the [MIT License](https://github.com/log1x/acf-fluent-helpers/blob/master/LICENSE.md).
