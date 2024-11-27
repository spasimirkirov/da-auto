<x-layouts.admin>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">View User - {{ $user->email }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-light border" href="/admin/users">Back</a>
            <a class="btn btn-primary border" href="/admin/users/{{ $user->id }}/edit">Edit Details</a>
            <a class="btn btn-primary border" href="/admin/users/{{ $user->id }}/password">Change Password</a>
            <x-admin.delete-record-modal title="Delete User" action="/admin/users/{{ $user->id }}">
                Are you sure you want to delete user "{{ $user->email }}"?
            </x-admin.delete-record-modal>
        </div>
    </x-slot>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Name</label>
        <span>{{ $user->name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Email address</label>
        <span>{{ $user->email }}</span>
    </div>
</x-layouts.admin>
