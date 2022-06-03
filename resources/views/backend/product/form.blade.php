{{-- @push('css')
<link rel="stylesheet" href="{{ asset('backend/common/select2/css/select2.min.css') }}">
<style>
.select2-container--default .select2-selection--single {
    padding: 0.375rem 0.75rem;
    height: unset;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 100%
}
</style>
@endpush --}}

<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Product name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Product Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" class="form-select select2" id="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select name="brand_id" class="form-select select2" id="brand_id">
                        <option value="">Select Brand</option>
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="unit_id" class="form-label">Unit</label>
                    <select name="unit_id" class="form-select select2" id="unit_id">
                        <option value="">Select Unit</option>
                        @foreach ($units as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="alert_qty" class="form-label">Alert Quantity</label>
                    <input type="number" name="alert_qty" class="form-control" id="alert_qty" placeholder="Alert Quantity" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="opening_qty" class="form-label">Opening Quantity</label>
                    <input type="number" name="opening_qty" class="form-control" id="opening_qty" placeholder="Opening Quantity">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="sell_price" class="form-label">Sales Price</label>
                    <input type="number" name="sell_price" class="form-control" id="sell_price" placeholder="Sales Price" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="purchase_price" class="form-label">Purchase Price</label>
                    <input type="number" name="purchase_price" class="form-control" id="purchase_price" placeholder="Purchase Price" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" name="sku" class="form-control" id="sku" placeholder="SKU" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Sales Price</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
            </div>

        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" name="status" type="checkbox" id="status">
            <label class="form-check-label" for="status">
                Status
            </label>
        </div>
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</form>


{{-- @push('js')

<script src="{{ asset('backend/common/select2/js/select2.min.js') }}"></script>

<script>
$(function() {
    $('.select2').select2({
        placeholder: 'Select an option'
    });
});
</script>

@endpush --}}