# Changelog

All notable changes to `observables` will be documented in this file

## 0.1.0 - 2020-08-14
- initial release

## 0.2.0 - 2020-09-14
- add support for Laravel 8


## 0.3.0 - 2020-10-06
- add support for Laravel 4 & php5
- bump min sfneal/queueables min version to improve composer update runtime


## 0.3.1 - 2020-10-07
- cut failing travis ci test using php 5.3


## 0.4.0 - 2020-12-04
- cut support for php5.3
- add support for php8


## 0.4.1 - 2020-12-11
- cut support for php5.5 & lower


## 0.5.0 - 2021-03-29
- cut support for php7.2 & lower
- bump min laravel/framework version to 8.34 to support EventFake assertion methods
- make test suite for testing `Event`, `Listener` & `Observable` functionality


## 1.0.0 - 2021-04-05
- initial production release
- bump sfneal/queueables min version to ^2.0
- refactor classes to remove 'Abstract' prefix from `Event`, `Listener` & `Observer`


## 1.1.0 - 2021-04-05
- make `CacheInvalidator` trait for implementing a `clearCaches()` method in an `Observer` extension


## 1.2.0 - 2021-04-05
- refactor `CacheInvalidator` from a trait to an interface


## 1.2.1 - 2021-07-14
- bump sfneal/mock-models min version to v0.7
