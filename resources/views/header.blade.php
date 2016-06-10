<!DOCTYPE html>
<html>
<head>
    <title>RealCME - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

@yield('before-styles-end')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    @yield('after-styles-end')
</head>
<body>