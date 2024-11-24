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
                    <th scope="col">Brand</th>
                    <th scope="col">Color</th>
                    <th scope="col">Transmission Type</th>
                    <th scope="col">Engine Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Visible</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->car_brand_name }}</td>
                        <td>{{ $car->car_color_name }}</td>
                        <td>{{ $car->car_transmission_type_name }}</td>
                        <td>{{ $car->car_engine_type_name }}</td>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->is_featured ? 'Yes' : 'No' }}</td>
                        <td>{{ $car->is_visible ? 'Yes' : 'No' }}</td>
                        <td>{{ $car->created_at }}</td>
                    </tr>
                @empty
                    <td colspan="5" class="text-center">No Results</td>
                @endforelse
            </tbody>
        </table>

        {{ $cars->links('admin.pagination.bootstrap-5') }}
    </div>
</x-app-layout>
