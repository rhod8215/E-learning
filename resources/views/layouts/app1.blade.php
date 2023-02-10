<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Elearning')}}</title>
        <link rel="stylesheet" href="{{asset('css/app1.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>