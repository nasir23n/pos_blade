<form action="{{ route('admin.brands.store') }}" method="post">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Brand name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Brand Name">
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Brand Details</label>
                    <input type="text" name="details" class="form-control" id="details" placeholder="Brand Details">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="status" type="checkbox" id="status">
                    <label class="form-check-label" for="status">
                        Status
                    </label>
                </div>
                <button class="btn btn-primary">Save Brand</button>
            </div>
        </div>
    </div>
</form>