<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- For favicon png -->
    {{-- <link rel="shortcut icon" type="image/icon" href="/vendor/carvilla-v1.0/assets/logo/favicon.png" /> --}}

    <title>{{ config('app.name') }} - {{ $pageTitle }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
    @if ($heroSection)
        <section id="hero-section" class="hero-section py-2 py-lg-5">
            <div class="container fade-in-y">
                {{ $heroSection }}
            </div>
        </section>
    @endif

    <section id="main">
        {{ $slot }}
    </section>

    <!--contact start-->
    <footer id="footer" class="footer bg-dark py-2 py-lg-5">
        <div class="container">
            <div class="footer-top mb-2 mb-lg-4">
                <div class="row row-cols-3">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="/" class="text-white"><h6>{{ config('app.name') }}</h6></a>
                        </div>
                        <p>Ased do eiusm tempor incidi ut labore et dolore magnaian aliqua. Ut enim ad minim veniam.</p>
                        <div class="footer-contact d-flex flex-column">
                            <span>Email: {{ env('CONTACTS_EMAIL') }}</span>
                            <span>Phone: {{ env('CONTACTS_PHONE') }}</span>
                        </div>
                    </div>
                    <div class="text-light">
                        <h6>Navigation</h6>
                        <ul class="list-unstyled text-light">
                            <li><a href="./">Home</a></li>
                            {{-- <li><a href="./featured-cars">Featured Cars</a></li> --}}
                            <li><a href="./contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <p> Developed by <a href="https://www.linkedin.com/in/spasimirkirov" target="_blank">Spasimir Kirov</a>.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
