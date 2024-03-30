<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white1 dark:bg-gray-800">
                <div class="bg-white max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
                        {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="max-w-7xl mx-auto">
            {{ $slot }}
        </main>

        <footer class="bg-zinc-50 text-center dark:bg-neutral-700 lg:text-left">
            <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
                © {{ date('Y') }} Copyright:
                <a href="/">@TuanTQ | Web Shop -  {{ config('app.name') }}</a>
            </div>
        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>