<x-app-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">View Car - {{ $car->name }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-light border" href="/admin/cars">Back</a>
            <a class="btn btn-primary" href="/admin/cars/{{ $car->id }}/edit">Edit</a>
        </div>
    </x-slot>

    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Car Name</label>
        <span>{{ $car->name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Price</label>
        <span>{{ $car->price }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Car Brand</label>
        <span>{{ $car->car_brand_name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Car Color</label>
        <span>{{ $car->car_color_name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Car Transmission Type</label>
        <span>{{ $car->car_transmission_type_name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Car Engine Type</label>
        <span>{{ $car->car_engine_type_name }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Manufacture Year</label>
        <span>{{ $car->year }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Mileage</label>
        <span>{{ $car->year }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Featured</label>
        <span>{{ $car->is_featured ? 'Yes' : 'No' }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold">Visible</label>
        <span>{{ $car->is_visible ? 'Yes' : 'No' }}</span>
    </div>
    <div class="d-flex flex-column gap mb-3">
        <label class="fs-6 fw-bold" for="description">Car Description:</label>
        <p>{{ $car->description }}</p>
    </div>
</x-app-layout>
