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
    {{--TODO: Extract into class--}}
    <main class="mb-auto flex-auto bg-[#5F627E]">
        {{ $slot }}
    </main>
    <livewire:footer/>
    </body>
</html>
