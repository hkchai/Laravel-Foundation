# Laravel-Foundation

## Introduction

Foundation 5 modules for Laravel 5. Requires Laravel and Foundation as Pre-Reqs

Since Laravel only has out-of-box support for BootStrap 3, therefore if you happen to use Zurb Foundation (I do), there will be some additional work needed.

The goal of this package is to bridge the gap for F5 users

This has been tested on:
- Laravel Framework 5.1.16
- Zurb Foundation 5


## Scope

Available Module(s):
- Pagination: SimplePagination

## How to use

If you are using BootStrap 3, in the `blade.php` file, suppose your data is called `$data`, you will have `{!! $data->render() !!}` which will render the pagination facility targetting BootStrap 3.

To use this package, we provide you with a Presenter, which you can pass over to `render()`, again, assume your data is `$data`:

```php
{!! $data->render(new LaravelFoundation\Pagination\SimpleFoundationFivePresenter($data)) !!}
```



