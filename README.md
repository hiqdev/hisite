# HiSite

**HiSite Yii2 base project**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hisite/v/stable)](https://packagist.org/packages/hiqdev/hisite)
[![Total Downloads](https://poser.pugx.org/hiqdev/hisite/downloads)](https://packagist.org/packages/hiqdev/hisite)
[![Build Status](https://img.shields.io/travis/hiqdev/hisite.svg)](https://travis-ci.org/hiqdev/hisite)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hisite.svg)](https://scrutinizer-ci.com/g/hiqdev/hisite/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hisite/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hisite/dev-master)

HiSite is a base project for building Yii2 web applications from plugins.

## Installation

For installation instructions see template project built with HiSite:

https://github.com/hiqdev/hisite-template

## Idea

HiSIte provides base for creating Yii2 web application.
It is similar in functional to `yii2-app-basic` but in contrast to it
HiSite is a plugin and you require it with composer instead of copy-pasting.

Article describing the idea behind HiSite coming soon...

HiSite includes:

- [yii2-swiftmailer] - [SwiftMailer] support
- [phpdotenv] - for `.env` support
- [yii2-menus] - pluggable menus
- [yii2-thememanager] - pluggable themes

[SwiftMailer]:          http://swiftmailer.org/
[yii2-swiftmailer]:     https://github.com/yiisoft/yii2-swiftmailer
[phpdotenv]:            https://github.com/vlucas/phpdotenv
[yii2-menus]:           https://hiqdev.com/packages/yii2-menus
[yii2-thememanager]:    https://hiqdev.com/packages/yii2-thememanager

## Configuration

This extension is supposed to be used with [composer-config-plugin].

Also you can use it usual way by copy-pasting config.
Look [src/config/hisite.php] for cofiguration example.

Available configuration parameters:

- `app.id`
- `app.name`
- `debug.enabled`
- `debug.allowedIps`

For more details please see [src/config/params.php].

[composer-config-plugin]:   https://github.com/hiqdev/composer-config-plugin
[src/config/hisite.php]:    src/config/hisite.php
[src/config/params.php]:    src/config/params.php

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2017, HiQDev (http://hiqdev.com/)
