<div class="container">
    <div class="section-header">
       {{ $title }}
    </div>
    <div class="d-flex justify-content-center py-5">
        <div id="newCarsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
