
<form action="{{ isset($payment_status) ? route('admin.payment_status.update', $payment_status->id) : route('admin.payment_status.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="row my-3">
            <div class="col-md-{{ request()->ajax() ? '12' : '6' }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Payment Status name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Payment Status Name" value="{{ isset($payment_status) ? $payment_status->name : '' }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    @isset($payment_status)
                    Update Payment Status
                    @else
                    Save Payment Status
                    @endisset
                </button>
            </div>
        </div>
    </div>
</form>