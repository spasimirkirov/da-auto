<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="single-featured-cars">
        <div class="featured-img-box">
            <div class="featured-cars-img">
                @if ($carImagePath ?? false)
                    <img src="{{ $carImagePath }}" alt="featured-cars">
                @else
                    <div class="p-2">
                        <img src="/vendor/pixabay/blank_image.png" alt="featured-cars">
                    </div>
                @endif
            </div>
            <div class="featured-model-info">
                @isset($carModel)
                    <p> {{ $carModel }}</p>
                @endisset

                @isset($carTransmissionType)
                    <p>{{ $carTransmissionType }}</p>
                @endisset
            </div>
        </div>
        <div class="featured-cars-txt">
            <h2><a href="{{ $carInfoLink ?? '#' }}">{{ $carName }}</a></h2>
            <h3>${{ $carPrice }}</h3>

            @isset($slot)
                <p>{{ $slot }} </p>
            @endisset
        </div>
    </div>
</div>
