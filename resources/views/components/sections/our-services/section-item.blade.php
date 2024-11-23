<div class="card">
    <div class="card-body">
        <div class="card-title py-2 py-lg-3wq">
            <p class="text-center fs-4"><a href="{{ $href ?? '#' }}">{{ $title }}</a></p>
        </div>
        <div class="card-text">
            <div class="text-center">{{ $icon ?? '' }}</div>
            <p class="text-center"> {{ $slot }} </p>
        </div>
    </div>
</div>
