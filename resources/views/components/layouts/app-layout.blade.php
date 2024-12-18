<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $siteName }} - {{ $pageTitle }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
        };
    </script>

    {{-- <link rel="shortcut icon" type="image/icon" href="/vendor/carvilla-v1.0/assets/logo/favicon.png" /> --}}
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

            @if ($carsCount > 0)
                <x-navigation.navigation-item href="/online-catalogue" title="Online Catalogue" :isActive="Request::is('online-catalogue')">
                    Online Catalogue
                </x-navigation.navigation-item>
            @endif

            <x-navigation.navigation-item href="/contact-us" title="Contact Us" :isActive="Request::is('contact-us')">
                Contact Us
            </x-navigation.navigation-item>

            @if ($isLogged)
                <x-navigation.navigation-item href="/admin/dashboard" title="Admin Panel">
                    Admin Panel
                </x-navigation.navigation-item>
            @endif
        </x-navigation.navigation-container>
    </navigation>

    <!--hero-section start -->
    @if ($heroSection ?? false)
        {{ $heroSection }}
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
                            <a href="/" class="text-white">
                                <h6>{{ $siteName }}</h6>
                            </a>
                        </div>
                        <p>Ased do eiusm tempor incidi ut labore et dolore magnaian aliqua. Ut enim ad minim veniam.</p>
                        <div class="footer-contact d-flex flex-column">
                            <span class="fw-bold">Email:
                                <a href="mailto:{{ env('CONTACTS_EMAIL') }}" rel="noreferrer">
                                    {{ env('CONTACTS_EMAIL') }}
                                </a>
                            </span>
                            <span class="fw-bold">Phone:
                                <a href="tel:{{ env('CONTACTS_PHONE') }}" rel="noreferrer">
                                    {{ env('CONTACTS_PHONE') }}
                                </a>
                            </span>
                        </div>
                    </div>
                    <div>
                        <h6>Social</h6>
                        <div class="d-flex gap-3">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div>
                        <h6>Navigation</h6>
                        <ul class="list-unstyled">
                            <li><a href="./" class="fw-bold">Home</a></li>
                            <li><a href="./featured-cars">Featured Cars</a></li>
                            <li><a href="./contact-us" class="fw-bold">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="row">
                    <div class="col-12">
                        <p> Developed by <a href="https://www.linkedin.com/in/spasimirkirov" target="_blank"
                                rel="noreferrer">Spasimir Kirov</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
