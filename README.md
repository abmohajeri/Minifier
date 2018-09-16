# Laravel Minifier
This package minifies the html files, which was sent from the server to users. 

## Requirements
- PHP >=5.4

## Getting started
composer require abolfazl/minifier

## Code Examples
```php
Route::get('/', function () {
    return view('welcome');
})->middleware('minify');
```

## License
Minifier is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2018 [Abolfazl Mohajeri](https://abolfazlmohajeri.ir)
