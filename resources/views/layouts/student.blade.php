<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Student Area') — {{ config('app.name', 'School') }}</title>

    {{-- Vite-built assets (Tailwind compiled) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', 'Figtree',
                Arial;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen text-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex gap-6">
            <aside class="w-64 hidden lg:block">
                <x-student-sidebar />
            </aside>

            <main class="flex-1">
                <div class="mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900">@yield('title', 'Dashboard')</h1>
                </div>

                <div>
                    @yield('content')
                </div>
            </main>
        </div>

        <footer class="mt-8 text-sm text-gray-500">&copy; {{ date('Y') }} Crestview College</footer>
    </div>

</body>

</html>
