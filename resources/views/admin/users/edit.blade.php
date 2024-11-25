<x-app-layout action="/admin/users/ {{ $user->id }}" method="PUT">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Edit User - {{ $user->name }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn btn-outline-secondary" href="/admin/users">Cancel</a>
            <button class="btn btn btn-outline-success" type="submit">Save</button>
        </div>
    </x-slot>

    <div class="container card pt-2 pt-md-4 w-50">
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            {{ html()->input('text', 'name', $user->name)->class('form-control')->placeholder('Enter user\'s name') }}
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email address</label>
            {{ html()->input('email', 'email', $user->email)->class('form-control')->placeholder('Enter user\'s email') }}
        </div>
    </div>
</x-app-layout>
