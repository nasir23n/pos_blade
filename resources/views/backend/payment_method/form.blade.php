
<form action="{{ isset($payment_method) ? route('admin.payment_method.update', $payment_method->id) : route('admin.payment_method.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Payment Method Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Payment Method Name" value="{{ isset($payment_method) ? $payment_method->name : '' }}">
                </div>
                @if (isset($payment_method) && $payment_method->image)
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="remove_image" type="checkbox" id="remove_image">
                        <label class="form-check-label" for="remove_image">
                            Remove Image ?
                        </label>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="status" type="checkbox" id="status" {{ (isset($payment_method) && $payment_method->status == 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">
                            Status
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="is_default" type="checkbox" id="is_default" {{ (isset($payment_method) && $payment_method->is_default == 1) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_default">
                            Is Default?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    @isset($payment_method)
                    Update Payment Method
                    @else
                    Save Payment Method
                    @endisset
                </button>
            </div>
        </div>
    </div>
</form>