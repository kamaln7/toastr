toastr
======

Easy [toastr.js](https://github.com/CodeSeven/toastr) notifications for Laravel 4

Installation
------------

1. Either run `composer require kamaln7/toastr dev-master` or add `"kamaln7/toastr": "dev-master"` to the `require` key in `composer.json` and run `composer install`
2. Add `'Kamaln7\Toastr\ToastrServiceProvider',` to the `providers` key in `app/config/app.php`
3. Add `'Toastr'          => 'Kamaln7\Toastr\Facades\Toastr',` to the `aliases` key in `app/config/app.php`

Usage
-----

Include jQuery and [toastr.js](https://github.com/CodeSeven/toastr) in your master view template, and the output of    `Toastr::render()` afterwards:

``` html
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js"></script>
{{ Toastr::render() }}
```

Call one of these methods in your controllers to insert a toast:
  - `Toastr::warning($message, $title = null)` - add a warning toast
  - `Toastr::error($message, $title = null)` - add an error toast
  - `Toastr::info($message, $title = null)` - add an info toast
  - `Toastr::success($message, $title = null)` - add a success toast
  - `Toastr::add($type: warning|error|info|success, $message, $title = null)` - add a toast
  - **`Toastr::clear()` - clear all current toasts**

### Setting custom Toastr options

You can set custom default Toastr options by adding a Laravel config key for Toastr. These options can also be overridden by padding an options array to any of the Toastr methods in the Usage section above.

For a list of available options, see [toastr.js' documentation](https://github.com/CodeSeven/toastr).
