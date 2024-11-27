<x-layouts.admin-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Dashboard</h4>
    </x-slot>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Users Count</label>
        <span>{{ $usersCount }}</span>
    </div>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Cars Count</label>
        <span>{{ $carsCount }}</span>
    </div>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Contact Email</label>
        <span>{{ $contactEmail ?? 'N/A' }}</span>
    </div>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Contact Phone</label>
        <span>{{ $contactEmail ?? 'N/A' }}</span>
    </div>
</x-layouts.admin-layout>
