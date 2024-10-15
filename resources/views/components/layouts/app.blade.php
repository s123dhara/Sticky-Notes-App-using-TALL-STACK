<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Files' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body x-data="{
    theme: localStorage.getItem('theme') ?? 'light',
    changeTheme() {
        this.theme = this.theme === 'dark' ? 'light' : 'dark'
        localStorage.setItem('theme', this.theme)
        document.querySelector('html').setAttribute('data-theme', this.theme);
    },
    init() {
        document.querySelector('html').setAttribute('data-theme', this.theme);
    }
}">
    <x-common.navbar />
    <x-common.toast />
    {{ $slot }}
    @livewireScripts
</body>

</html>
