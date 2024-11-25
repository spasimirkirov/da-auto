@props(['action', 'method'])

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
    <navigation>
        <x-admin.navigation />
    </navigation>

    <main>
        <div class="container py-2 py-lg-4">
            @if ($action ?? false)
                <form action="{{ $action }}" method="{{ $method }}">
                    <x-admin.input-error />
            @endif
            <!-- Page Heading -->
            @isset($header)
                <div class="d-flex justify-content-between align-content-center border-bottom pb-2 mb-2 mb-md-4">
                    {{ $header }}
                </div>
            @endisset
            <!-- Page Content -->

            <div class="container card">
                <div class="pt-2 pt-md-4 w-md-50">
                    {{ $slot }}
                </div>
            </div>

            @if ($action ?? false)
                @csrf
                </form>
            @endif
        </div>
    </main>
    @vite(['resources/js/app.js'])
</body>

</html>
