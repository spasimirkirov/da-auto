<x-layouts.admin-layout action="/admin/settings" method="POST">
    <x-slot:header>
        <h4 class="fs-4 fw-bold">Edit Settings</h4>
        <div class="d-flex justify-content-end gap-2">
            <a class="btn btn-danger" href="/admin/settings">Cancel</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </x-slot>

    @method('PUT')
    <div class="mb-3">
        <label class="form-label" for="contact_email">Contact Email</label>
        {{ html()->input('text', 'contact_email', old('contact_email', $contact_email))->class('form-control')->placeholder('Enter Contact Email') }}
    </div>
    <div class="mb-3">
        <label class="form-label" for="contact_phone">Contact Phone</label>
        {{ html()->input('text', 'contact_phone', old('contact_phone', $contact_phone))->class('form-control')->placeholder('Enter Contact Phone') }}
    </div>
</x-layouts.admin-layout>
