<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="/vendor/carvilla-v1.0/assets/logo/favicon.png" />

    <!--style.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/style.css">

    <!--animate.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/owl.theme.default.min.css">
    <title>{{ config('app.name') }} - {{ $pageTitle }}</title>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <navigation>
        <x-navigation.navigation-container>
            <x-navigation.navigation-item href="/" title="Home" :isActive="Request::is('/')">
                Home
            </x-navigation.navigation-item>
            {{-- <x-navigation.navigation-item href="/featured-cars" title="Featured Cars" :isActive="Request::is('/featured-cars')">
                Featured Cars
            </x-navigation.navigation-item> --}}
            <x-navigation.navigation-item href="/contact-us" title="Contact Us" :isActive="Request::is('/contact-us')">
                Contact Us
            </x-navigation.navigation-item>
        </x-navigation.navigation-container>
    </navigation>

    <!--hero-section start -->
    <section id="hero-section" class="hero-section mb-5">
        @if ($heroSectionItems ?? false)
            {{ $heroSectionItems }}
        @endif
    </section>

    {{ $slot }}

    @include('partials.scripts')
    @include('partials.footer')
</body>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</html>
