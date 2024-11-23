<li class="nav-item">
    <a href="{{ $href }}" title="{{ $title }}" @class(['nav-link fs-5 fw-bold', 'active' => $isActive])>
        {{ $slot }}
    </a>
</li>
