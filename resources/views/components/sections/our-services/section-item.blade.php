<div class="single-service-item">
    <div class="single-service-icon">{{ $icon ?? '' }}</div>
    <h2><a href="{{ $href ?? '#' }}">{{ $title }}</a></h2>
    <p> {{ $slot }} </p>
</div>
