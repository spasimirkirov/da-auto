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

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/linearicons.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/flaticon.css">

    <!--animate.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="/vendor/carvilla-v1.0/assets/css/responsive.css">
    <title>{{ config('app.name') }} - {{ $pageTitle }}</title>
</head>

<body>
    <x-layouts.partials.header>
        {{ $pageHeroSection }}
    </x-layouts.partials.header>

    {{ $slot }}

    @include('partials.scripts')
    @include('partials.footer')
</body>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</html>
