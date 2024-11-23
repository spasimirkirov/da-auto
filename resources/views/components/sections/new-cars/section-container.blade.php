<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i >= $itemsCount; $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            {{ $slot }}
        </div>
    </div>
</div>
