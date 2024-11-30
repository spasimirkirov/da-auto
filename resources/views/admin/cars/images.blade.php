<x-layouts.admin.car-layout>
    <x-slot:header>
        <h4 class="fs-4 fw-bold">View Car - {{ $car->name }}</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-light border" href="/admin/cars">Back to Cars</a>
            <x-admin.file-upload-modal title="Upload Image" action="/admin/cars/{{ $car->id }}/upload" />
            <x-admin.delete-record-modal title="Delete User" action="/admin/cars/{{ $car->id }}">
                Are you sure you want to delete car "{{ $car->name }}"?
            </x-admin.delete-record-modal>
        </div>
    </x-slot>

    <div class="d-flex">
        @forelse ($car->images as $image)
            <div class="d-flex flex-column w-25 me-2">
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Car Image" class="img-fluid" />
                <div class="image-controls mt-2">
                    <form action="/admin/cars/{{ $car->id }}/removeImage/{{ $image->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</a>
                    </form>
                </div>
            </div>
        @empty
            <p class="fs-6 fw-bold mx-auto">There are no images for car {{ $car->name }}</p>
        @endforelse
    </div>
</x-layouts.admin.car-layout>
