<x-app-layout action="/admin/cars" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Create Car</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-danger" href="/admin/cars">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </x-slot>

    <div class="mb-3">
        <label class="form-label" for="name">Car Name</label>
        {{ html()->input('text', 'name', old('name'))->class('form-control')->placeholder('Enter Car Name') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        {{ html()->input('number', 'price', old('price'))->class('form-control')->placeholder('Enter Car Price') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="car_brand_id">Car Brand</label>
        {{ html()->select('car_brand_id', $carBrandIdNameMap)->class('form-select')->placeholder('Choose') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="car_color_id">Car Color</label>
        {{ html()->select('car_color_id', $carColorIdNameMap, old('car_color_id'))->class('form-select')->placeholder('Choose') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="car_transmission_type_id">Car Transmission Type</label>
        {{ html()->select('car_transmission_type_id', $carTransmissionIdNameMap, old('car_transmission_type_id'))->class('form-select')->placeholder('Choose') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="car_engine_type_id">Car Engine Type</label>
        {{ html()->select('car_engine_type_id', $carEngineIdNameMap, old('car_engine_type_id'))->class('form-select')->placeholder('Choose') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="year">Manufacture Year</label>
        {{ html()->input('number', 'year', old('year'))->class('form-control')->placeholder('Enter Manufacture Year') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="year">Mileage</label>
        {{ html()->input('number', 'mileage', old('mileage'))->class('form-control')->placeholder('Enter Car Mileage') }}
    </div>
    <div class="form-check mb-3">
        <label class="form-label" for="is_featured">Is Featured?</label>
        {{ html()->checkbox('is_featured', false, '0')->class('form-check-input') }}
    </div>
    <div class="form-check mb-3">
        <label class="form-label" for="is_visible">Is Visible?</label>
        {{ html()->checkbox('is_visible', false, '0')->class('form-check-input') }}
    </div>
    <div class="form-check mb-3">
        <label class="form-label" for="description">Car Description</label>
        {{ html()->textarea('description', old('description'))->class('form-control')->placeholder('Enter Car Description') }}
    </div>
</x-app-layout>
