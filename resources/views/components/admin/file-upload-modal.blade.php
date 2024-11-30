<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fileUploadModal">
    {{ $title }}
</button>

<!-- Modal -->
<div class="modal fade" id="fileUploadModal" tabindex="-1" role="dialog" aria-labelledby="fileUploadModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header d-flex justify-content-between">
                    <h6 class="modal-title" id="fileUploadModalLabel">{{ $title }}</h6>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select file to upload</label>
                        <input class="form-control" type="file" id="formFile" name="uploadedFile" required>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-2 mt-lg-4">
                        <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
