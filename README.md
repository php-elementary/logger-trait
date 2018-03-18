<h1>Extention of \Psr\Log\LoggerAwareTrait</h1>

The trait `LogerTrait` extends `LoggerAwareTrait` with one method `getLoger()`. 

[![Latest Stable Version](https://poser.pugx.org/elementary/logger-trait/v/stable)](https://packagist.org/packages/elementary/logger-trait)
[![License](https://poser.pugx.org/elementary/logger-trait/license)](https://packagist.org/packages/elementary/logger-trait)
[![Build Status](https://travis-ci.org/php-elementary/logger-trait.svg?branch=master)](https://travis-ci.org/php-elementary/logger-trait)
[![Coverage Status](https://coveralls.io/repos/github/php-elementary/logger-trait/badge.svg)](https://coveralls.io/github/php-elementary/logger-trait)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/) and then run

```
composer require elementary/logger-trait
```

Usage
-----
```php
use elementary\logger\traits\LoggerGetInterface;
use elementary\logger\traits\LoggerTrait;
use Psr\Log\LoggerAwareInterface;

class Example implements LoggerGetInterface, LoggerAwareInterface
{
    use LoggerTrait;

    public function doSomeThing()
    {
        // do some thing
        $this->getLogger()->info('do some thing');
    }
}

$ex = new Example();

// In this case, the message will be sent to `\Psr\Log\NullLogger`
$ex->doSomeThing();

// Now message will be send to Graylog
$ex->setLogger(new \Gelf\Logger($publisher, $facility));
$ex->doSomeThing(); 
```

Testing and Code coverage
-------
Unit Tests are located in tests directory.
You can run your tests and collect coverage with the following command:
```
vendor/bin/phpunit
```
Result of coverage will be output into the `tests/output` directory.

License
-------
For license information check the [LICENSE](LICENSE)-file.