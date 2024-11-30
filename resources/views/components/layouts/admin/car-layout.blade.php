<x-layouts.admin-layout>
    <x-slot:header>
        {{ $header }}
    </x-slot>

    @if ($tabs ?? false)
        {{ $tabs }}
    @else
        <x-slot:tabs>
            <li class="nav-item">
                <a @class(['nav-link', 'active' => Request::is('admin/cars/*/details')]) href="/admin/cars/{{ request()->route('id') }}/details">Details</a>
            </li>
            <li class="nav-item">
                <a @class(['nav-link', 'active' => Request::is('admin/cars/*/images')]) href="/admin/cars/{{ request()->route('id') }}/images">Images</a>
            </li>
        </x-slot>
    @endif

    {{ $slot }}
</x-layouts.admin-layout>
