@php
    $path = Route::current()->uri;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('./favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('./favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('./favicon_io/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('./favicon_io/site.webmanifest')}}">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="flex flex-col min-h-screen">
    <livewire:header/>
        <main @class([
            "bg-[#5F627E]" => $path === '/',
            "bg-[#3F3D56]" => $path === 'hire-a-dev',
            "bg-[#22222E]" => $path === 'contact',
            "bg-[#13131C]" => $path === 'blog',
            "mb-auto flex-auto"
        ])>
            {{ $slot }}
        </main>
    <livewire:footer/>
    </body>
</html>
