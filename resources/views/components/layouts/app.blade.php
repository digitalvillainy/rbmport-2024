@php
    $path = Route::current()->uri;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
