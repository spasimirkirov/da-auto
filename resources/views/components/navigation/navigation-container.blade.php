
<!-- Start Navigation -->
<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
    data-minus-value-mobile="55" data-speed="1000">

    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">{{ config('app.name') }}<span></span></a>

        </div><!--/.navbar-header-->
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                {{ $slot }}
            </ul><!--/.nav -->
        </div><!-- /.navbar-collapse -->
    </div><!--/.container-->
</nav><!--/nav-->
<!-- End Navigation -->
