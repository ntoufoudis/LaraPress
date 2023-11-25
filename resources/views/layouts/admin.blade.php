<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Theme Toggle Script -->
        {{--                <script>--}}
        {{--                    // On page load or when changing themes, best to add inline in `head` to avoid FOUC--}}
        {{--                    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {--}}
        {{--                        document.documentElement.classList.add('dark');--}}
        {{--                    } else {--}}
        {{--                        document.documentElement.classList.remove('dark')--}}
        {{--                    }--}}
        {{--                </script>--}}
        <!-- End Theme Toggle Script -->

    </head>
    <body class="bg-[#F4F4F4] text-[#333333] h-screen">
        <x-admin.header/>

        <x-admin.sidebar/>

        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-14">
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
