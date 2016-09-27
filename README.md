# phossa2/validate
[![Build Status](https://travis-ci.org/phossa2/validate.svg?branch=master)](https://travis-ci.org/phossa2/validate)
[![Code Quality](https://scrutinizer-ci.com/g/phossa2/validate/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phossa2/validate/)
[![Code Climate](https://codeclimate.com/github/phossa2/validate/badges/gpa.svg)](https://codeclimate.com/github/phossa2/validate)
[![PHP 7 ready](http://php7ready.timesplinter.ch/phossa2/validate/master/badge.svg)](https://travis-ci.org/phossa2/validate)
[![HHVM](https://img.shields.io/hhvm/phossa2/validate.svg?style=flat)](http://hhvm.h4cc.de/package/phossa2/validate)
[![Latest Stable Version](https://img.shields.io/packagist/vpre/phossa2/validate.svg?style=flat)](https://packagist.org/packages/phossa2/validate)
[![License](https://poser.pugx.org/phossa2/validate/license)](http://mit-license.org/)

**phossa2/validate** is a PHP validation proxy to various validate libraries.

It requires PHP 5.4, supports PHP 7.0+ and HHVM. It is compliant with [PSR-1][PSR-1],
[PSR-2][PSR-2], [PSR-3][PSR-3], [PSR-4][PSR-4], and the proposed [PSR-5][PSR-5].

[PSR-1]: http://www.php-fig.org/psr/psr-1/ "PSR-1: Basic Coding Standard"
[PSR-2]: http://www.php-fig.org/psr/psr-2/ "PSR-2: Coding Style Guide"
[PSR-3]: http://www.php-fig.org/psr/psr-3/ "PSR-3: Logger Interface"
[PSR-4]: http://www.php-fig.org/psr/psr-4/ "PSR-4: Autoloader"
[PSR-5]: https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md "PSR-5: PHPDoc"

Installation
---
Install via the `composer` utility.

```bash
composer require "phossa2/validate"
```

or add the following lines to your `composer.json`

```json
{
    "require": {
       "phossa2/validate": "^2.0.0"
    }
}
```

Usage
---

Create the validate instance,

```php
use Phossa2\Validate\Validate;

$v = new Validate();

if (true === $v->validate($_POST, [
    'username' => 'required|alpha_numeric',
    'password' => 'required|max_len,100|min_len,6'
])) {
    // continue
} else {
    $err = $v->getError();
}
```

Change log
---

Please see [CHANGELOG](CHANGELOG.md) from more information.

Testing
---

```bash
$ composer test
```

Contributing
---

Please see [CONTRIBUTE](CONTRIBUTE.md) for more information.

Dependencies
---

- PHP >= 5.4.0

- phossa2/shared >= 2.0.21

- [wixel/gump](https://github.com/Wixel/GUMP) >= 1.4

License
---

[MIT License](http://mit-license.org/)
