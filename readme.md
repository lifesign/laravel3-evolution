# Laravel3 Evolution

[![Build Status](https://travis-ci.org/lifesign/laravel3-evolution.svg)](https://travis-ci.org/lifesign/laravel3-evolution)

Laravel3 is a milestone. Due to laravel3.2.14 is not maintain by official any more,
This repository aims to update some core file and maybe port some cool feature form laravel4.
Hope you enjoy it~

The official Documentation is not accessible, Try the below one.

[Documentation](http://laravel3.veliovgroup.com/docs)

## Changes
- add serve command for local develop just use `php artisan serve` like l4.
- add include_files for anbu profiler.
- fix yield keyword problem in php5.5.
- update symfony core to the latest.

## Feature Overview

- Simple routing using Closures or controllers.
- Views and templating.
- Driver based session and cache handling.
- Database abstraction with query builder.
- Authentication.
- Migrations.
- PHPUnit Integration.
- A lot more.

## A Few Examples

### Hello World:

```php
<?php

Route::get('/', function()
{
	return "Hello World!";
});
```

### Passing Data To Views:

```php
<?php

Route::get('user/(:num)', function($id)
{
	$user = DB::table('users')->find($id);

	return View::make('profile')->with('user', $user);
});
```

### Redirecting & Flashing Data To The Session:

```php
<?php

return Redirect::to('profile')->with('message', 'Welcome Back!');
```

## License

Laravel3_Evolution is open-sourced software licensed under the MIT License.
