### ACF Fluent Helpers

[![Latest Stable Version](https://poser.pugx.org/log1x/acf-fluent-helpers/v/stable)](https://packagist.org/packages/log1x/acf-fluent-helpers)
[![Total Downloads](https://poser.pugx.org/log1x/acf-fluent-helpers/downloads)](https://packagist.org/packages/log1x/acf-fluent-helpers)
[![License](https://poser.pugx.org/log1x/acf-fluent-helpers/license)](https://packagist.org/packages/log1x/acf-fluent-helpers)

This is a simple set of helper functions for [ACF Fluent](https://github.com/samrap/acf-fluent) similar to the `[helpers.php](https://github.com/samrap/acf-fluent/blob/master/src/helpers.php)` shipped with ACF Fluent, but instead is auto-loaded by Composer instead of having to be manually included.

I also use really generic function names because I'm naughty. :wink:

### Installation

Install via Composer:

```
composer require log1x/acf-fluent-helpers:dev-master
```

### Usage

```php
$field = field('example')->get();
$subfield = subfield('example')->get();
$option = option('example')->get();
```
