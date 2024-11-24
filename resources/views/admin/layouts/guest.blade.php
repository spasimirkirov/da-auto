<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{ $pageTitle ?? 'Dashboard' }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <main>
        <div class="container py-2 py-lg-4">
            {{ $slot }}
        </div>
    </main>
    @vite(['resources/js/app.js'])
</body>

</html>
