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

        <footer class="flex flex-col items-center justify-center pt-32 pb-8">
            <a href="https://twitter.com/fredchristian__">                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="h-6 w-6 fill-transparent stroke-cyan-500">
                    <path d="M128,88c0-22,18.5-40.3,40.5-40a40,40,0,0,1,36.2,24H240l-32.3,32.3A127.9,127.9,0,0,1,80,224c-32,0-40-12-40-12s32-12,48-36c0,0-64-32-48-120,0,0,40,40,88,48Z" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                </svg>
            </a>
        </footer>

        @stack('scripts')
    </body>
</html>
