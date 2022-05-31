
<form action="{{ isset($supplier) ? route('admin.supplier.update', $supplier->id) : route('admin.supplier.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Supplier name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Supplier Name" value="{{ isset($supplier) ? $supplier->name : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Supplier email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Supplier email" value="{{ isset($supplier) ? $supplier->email : '' }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ isset($supplier) ? $supplier->phone : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ isset($supplier) ? $supplier->address : '' }}">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="status" type="checkbox" id="status" {{ (isset($supplier) && $supplier->status==1) ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">
                        Status
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">
                    @isset($supplier)
                    Update Supplier
                    @else
                    Save Supplier
                    @endisset
                </button>
            </div>
        </div>
    </div>
</form>