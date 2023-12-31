<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Noteshare</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex items-center justify-center max-w-6xl">
                <div class="text-center">
                    <div class="px-10 py-24 mx-auto space-y-4 align-middle max-w-7xl">
                        <div class="flex flex-col items-center space-y-8">
                            <x-application-logo class="w-24 h-24 fill-current text-primary" />
                            <x-button primary xl href="{{ route('dashboard') }}">
                                Get Started</x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
