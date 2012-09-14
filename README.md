# php-timecop

[![Build Status](https://secure.travis-ci.org/hnw/php-timecop.png?branch=master)](http://travis-ci.org/hnw/php-timecop)

## DESCRIPTION

A PHP extension providing "time travel" and "time freezing" capabilities, inspired by [ruby timecop gem](http://github.com/jtrupiano/timecop).

## INSTALL

```
git clone https://github.com/hnw/php-timecop.git
cd php-timecop
phpize
./configure
make
make install
```

After install, add these lines to your php.ini

```ini
extension=timecop.so
```

## SYSTEM REQUIREMENTS

- PHP 5.2.x, 5.3.x, 5.4.x
  - Tested only on 5.2.17, 5.3.16, and 5.4.6
- Apache SAPI, CLI SAPI
  - Other SAPIs are not tested.
- non-ZTS(recommended), ZTS

## FEATURES

- Freeze time to a specific point.
- Travel back to a specific point in time, but allow time to continue moving forward from there.
- Override the following PHP stock functions and class, which supports freezing or traveling time.
  - time()
  - mktime()
  - gmmktime()
  - date()
  - gmdate()
  - idate()
  - getdate()
  - localtime()
  - strtotime()
  - strftime()
  - gmstrftime()
  - unixtojd()
  - DateTime
- Rewrite value of the following global variables when the time has been moved.
  - $_SERVER['REQUEST_TIME']


## USAGE

```php
<?php
var_dump(date("Y-m-d")); // todays date
timecop_freeze(0);
var_dump(gmdate("Y-m-d H:i:s")); // string(19) "1970-01-01 00:00:00"
var_dump(strtotime("+100000 sec")); // int(10000)
```
