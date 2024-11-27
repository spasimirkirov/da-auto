<x-layouts.admin-layout action="/admin/users/{{ $user->id }}" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Edit User - {{ $user->email }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-danger" href="/admin/users/{{ $user->id }}">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </x-slot>

    @method('PUT')
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        {{ html()->input('text', 'name', $user->name)->class('form-control')->placeholder('Enter user\'s name') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email address</label>
        {{ html()->input('email', 'email', $user->email)->class('form-control')->placeholder('Enter user\'s email') }}
    </div>
</x-layouts.admin-layout>
