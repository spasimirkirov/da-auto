<x-layouts.admin action="/admin/users" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Create User</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-danger" href="/admin/users">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </x-slot>

    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        {{ html()->input('text', 'name')->class('form-control')->placeholder('Enter user\'s name') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email address</label>
        {{ html()->input('email', 'email')->class('form-control')->placeholder('Enter user\'s email') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        {{ html()->input('password', 'password')->class('form-control')->placeholder('Enter user\'s password') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="password">Password Confirmation</label>
        {{ html()->input('password', 'password_confirmation')->class('form-control')->placeholder('Confirm user\'s password') }}
    </div>
</x-layouts.admin>
