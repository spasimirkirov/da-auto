<x-app-layout action="/admin/users" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold"> {{ __('Create User') }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn btn-outline-secondary" href="/admin/users">Cancel</a>
            <button class="btn btn btn-outline-success" type="submit">Save</button>
        </div>
    </x-slot>

    <div class="container card pt-2 pt-md-4 w-50">
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input name="name" class="form-control" placeholder="Enter Name"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email address</label>
            <input name="email" type="email" class="form-control" placeholder="Enter Email"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input name="password" type="password" class="form-control"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input name="password_confirmation" type="password" class="form-control"/>
        </div>
    </div>
</x-app-layout>
