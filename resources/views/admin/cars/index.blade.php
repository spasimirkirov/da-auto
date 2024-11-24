<x-app-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold"> {{ __('Cars') }}</h4>
        <div class="d-flex justify-content-end">
            <a href="/admin/cars/create" class="btn btn-primary">Create</a>
        </div>
    </x-slot>

    <div class="container card pt-2 pt-md-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->is_featured ? 'Yes' : 'No' }}</td>
                        <td>{{ $car->created_at }}</td>
                    </tr>
                @empty
                    <td colspan="5" class="text-center">No Results</td>
                @endforelse
            </tbody>
        </table>
        {{ $cars->links() }}
    </div>
</x-app-layout>
