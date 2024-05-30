<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <main class="flex h-screen min-h-screen flex-col justify-between">
        <livewire:navbar />
        {{ $slot }}
        <livewire:footer />
    </main>
</body>

</html>
