<x-layouts.admin-layout action="/admin/users/{{ $user->id }}/password" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Update User's password - {{ $user->email }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-danger" href="/admin/users">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </x-slot>

    @method('PUT')
    <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        {{ html()->input('password', 'password')->class('form-control')->placeholder('Enter user\'s password') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="password">Password Confirmation</label>
        {{ html()->input('password', 'password_confirmation')->class('form-control')->placeholder('Confirm user\'s password') }}
    </div>
</x-layouts.admin-layout>
