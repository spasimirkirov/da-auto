<x-app-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold"> {{ __('Users') }}</h4>
        <div class="d-flex justify-content-end">
            <a href="/admin/users/create" class="btn btn-primary">Create</a>
        </div>
    </x-slot>

    <div class="container card pt-2 pt-md-4">
        <x-datatable :entities="$users">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            @forelse ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @empty
                <td colspan="5" class="text-center">No Results</td>
            @endforelse
        </x-datatable>
    </div>
</x-app-layout>
