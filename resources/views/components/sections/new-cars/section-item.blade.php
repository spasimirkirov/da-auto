<div @class(['carousel-item', 'active' => $idx === 0])>
    <div class="d-block w-100">
        <img src="{{ $carImagePath ?? '' }}" alt="newest car" />

        <h2><a href="{{ $href }}">{{ $carName }}</a></h2>
        <p>{{ $slot }} </p>

        <button class="welcome-btn new-cars-btn" onclick="window.location.href='{{ $href }}'">
            View Details
        </button>
    </div>
</div>
