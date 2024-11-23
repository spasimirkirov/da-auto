<div @class(['carousel-item', 'active' => $idx === 0])>
    <div class="d-flex flex-column">
        <div class="d-flex flex-justify-content-center">
            <img src="{{ $carImagePath ?? '' }}" class="carousel-image" alt="newest car" />
        </div>

        <h2><a href="{{ $href }}" class="text-light">{{ $carName }}</a></h2>
        <p>{{ $slot }} </p>

        <div class="d-block">
            <button class="btn btn-primary" onclick="window.location.href='{{ $href }}'">
                View Details
            </button>
        </div>
    </div>
</div>
