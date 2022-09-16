@aware([
    'title' => config('app.name')
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-layout.assets.meta/>
        <title>{{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('style')
    </head>

    <body {{ $attributes }}>
        {{ $slot }}

        @stack('scripts')
    </body>
</html>
