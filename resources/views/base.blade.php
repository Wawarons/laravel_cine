<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    @yield('style')
    <title>@yield('title')</title>
</head>
    <body>
        @yield('content')
    </body>
</html>
