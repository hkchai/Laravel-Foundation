# Laravel-Foundation

## Introduction

Foundation 5 modules for Laravel 5. This package requires Laravel and Foundation by Zurb as pre-requisites

This package aims to provide support for Foundation by Zurb, for use in Laravel.

This has been tested on:
- Laravel Framework 5.1.16
- Foundation 5 by Zurb


## Availability

The following module(s) are available:

- Pagination: SimplePagination

## Pagination:

### Installation

You need to have a working `composer` [https://getcomposer.org]

On the command line, issue `composer require hkchai/laravel-foundation`

### How to use

If you are using BootStrap 3, in the `blade.php` file, assume your data is called `$data`, you should have `{!! $data->render() !!}`, which will render the pagination facility targeting BootStrap 3.

However the default presenter doesn't quite work for Foundation.

This package provides you with a presenter class that generates correct HTML for Foundation 5.

Again assuming your data is `$data`, here is how you invoke this package:

```php
{!! $data->render(new LaravelFoundation\Pagination\SimpleFoundationFivePresenter($data, [options])) !!}
```

### Optional Options

```pagination-centered```: boolean, default to false (i.e. not centered)

#### Example
```php
{!! $data->render(new LaravelFoundation\Pagination\SimpleFoundationFivePresenter($data, ["pagination-centered"=>'true'])) !!}
```
