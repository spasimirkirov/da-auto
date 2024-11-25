<x-app-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">View User - {{ $user->email }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-secondary border" href="/admin/users">Back</a>
            <a class="btn btn-primary border" href="/admin/users/{{ $user->id }}/edit">Edit Details</a>
            <a class="btn btn-primary border" href="/admin/users/{{ $user->id }}/password">Change Password</a>
        </div>
    </x-slot>

    <div class="container card">
        <div class="pt-2 pt-md-4 w-md-50">
            <div class="d-flex flex-column gap mb-3">
                <label class="fs-6 fw-bold">Name</label>
                <span>{{ $user->name }}</span>
            </div>
            <div class="d-flex flex-column gap mb-3">
                <label class="fs-6 fw-bold">Email address</label>
                <span>{{ $user->email }}</span>
            </div>
        </div>
    </div>
</x-app-layout>