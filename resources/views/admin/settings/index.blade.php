<x-layouts.admin-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Settings</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-primary" href="/admin/settings/edit">Edit</a>
        </div>
    </x-slot>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Contact Email</label>
        <span>{{ $contact_email ?? 'N/A' }}</span>
    </div>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Contact Phone</label>
        <span>{{ $contact_phone ?? 'N/A' }}</span>
    </div>
</x-layouts.admin-layout>
