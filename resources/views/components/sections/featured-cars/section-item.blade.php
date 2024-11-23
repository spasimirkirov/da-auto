<div class="d-flex flex-column">
    <div class="d-flex flex-column border p-2">
        <div class="d-flex justify-content-center border-bottom py-2 py-md-4">
            @if ($carImagePath ?? false)
                <img src="{{ $carImagePath }}" class="w-50" alt="featured-cars">
            @else
                <img src="/vendor/pixabay/blank_image.png" class="mx-auto w-25" alt="featured-cars">
            @endif
        </div>
        @isset($carModel)
            <span>Model: {{ $carModel }}</span>
        @endisset
        @isset($carTransmissionType)
            <span>Transmission: {{ $carTransmissionType }}</span>
        @endisset
    </div>
    <h5><a href="{{ $href ?? '#' }}">{{ $carName }}</a></h5>
    <h6>${{ $carPrice }}</h6>
    @isset($slot)
        <p>{{ $slot }} </p>
    @endisset
</div>
