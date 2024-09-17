<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <p>This is from App.Blade</p>
        {{ $slot }}
        <p>This is from the app.blade below the slot</p>
    </body>
</html>
