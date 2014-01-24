toastr
======

Easy [toastr.js](https://github.com/CodeSeven/toastr) notifications for Laravel 4

Installation
------------

1. 1. Either run `composer require kamaln7/toastr dev-master`
   2. or add `"kamaln7/toastr": "dev-master"` to the `require` key in `composer.json` and run `composer install`
2. Add `'Kamaln7\Toastr\ToastrServiceProvider',` to the `providers` key in `app/config/app.php`
3. Add `'Toastr'          => 'Kamaln7\Toastr\Facades\Toastr',` to the `aliases` key in `app/config/app.php`

Usage
-----

1. Include jQuery and [toastr.js](https://github.com/CodeSeven/toastr) in your master view template, and the output of `Toastr::render()` afterwards:

``` html
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.0/js/toastr.min.js"></script>
{{ Toastr::render() }}
```

2. Call one of these methods in your controllers to insert a toast:
  - `Toastr::warning($message, $title = null)` - add a warning toast
  - `Toastr::error($message, $title = null)` - add an error toast
  - `Toastr::info($message, $title = null)` - add an info toast
  - `Toastr::success($message, $title = null)` - add a success toast
  - `Toastr::add($type: warning|error|info|success, $message, $title = null)` - add a toast
  - **`Toastr::clear()` - clear all current toasts**
