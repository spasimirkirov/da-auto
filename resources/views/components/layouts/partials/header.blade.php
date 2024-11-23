<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<!--hero-section start -->
<section id="home" class="hero-section">
    <!-- top-area Start -->
    <div class="top-area">
        <div class="header-area">
            @include('partials.navigation')
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </div><!-- /.top-area-->
    <!-- top-area End -->
    {{ $slot }}
</section><!--/.hero-section-->
<!--hero-section end -->
