<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Upload Gambar' }}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="h-full">
        {{ $slot }}
    </body>
</html>
