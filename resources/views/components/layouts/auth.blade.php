<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Login' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
        <div>
            <img src="{{ asset('images/files.svg') }}" alt="" class="w-full object-contain">
        </div>

    {{ $slot }}
    
    </div>

    @livewireScripts
</body>

</html>
