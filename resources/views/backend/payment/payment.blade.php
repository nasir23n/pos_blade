<br>
<h4 class="text-success">Make Payment : </h4>
<form action="{{ route('admin.payment.store') }}" method="post" id="payment_form">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-2">
            <label class="form-label" for="amount">Amount</label>
            <input type="number" form="purchase_form" class="form-control" id="amount" name="amount" placeholder="Amount" min="0">
        </div>
        <div class="col-md-6 mb-2">
            <label for="payment_method" class="form-label">Payment Method</label>
            <select class="form-select" form="purchase_form" id="payment_method" name="payment_method">
                @foreach ($payment_methods as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="payment_note" class="form-label">Payment Note</label>
            <textarea type="text" form="purchase_form" class="form-control" id="payment_note" name="payment_note" placeholder="Payment Note"></textarea>
        </div>
    </div>
    <button class="btn btn-primary mt-2">Save</button>
</form>

<br>

<script>
$('#payment_form').submit(function(e) {
    e.preventDefault();
});
</script>