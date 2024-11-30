@props(['action', 'method'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{ $pageTitle ?? 'Admin Panel' }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
        };
    </script>
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

            @isset($tabs)
                <ul class="nav nav-tabs">
                    {{ $tabs }}
                </ul>
            @endisset

            <div @class([
                'container border',
                'border-top-0' => isset($tabs),
                'border-top' => !isset($tabs),
            ])>
                <div class="py-2 py-md-4 w-md-50">
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
