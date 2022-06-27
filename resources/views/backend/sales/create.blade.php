@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Sales</h1>
<style>
.product_grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-gap: 10px;
    margin: 20px 0;
}
@media (max-width: 992px) {
    .product_grid {
        grid-template-columns: repeat(4, 1fr);
    }
}
@media (max-width: 700px) {
    .product_grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 470px) {
    .product_grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 360px) {
    .product_grid {
        grid-template-columns: repeat(1, 1fr);
    }
}
.product_grid .item.active {
    background: #cfe2ff !important;
}
.product_grid .item {
    border: 1px solid #ddd;
    margin-left: -1px;
    margin-top: -1px;
    display: flex;
    flex-direction: column;
    user-select: none;
    transition: all 0.3s ease-in-out;
}
.product_grid .item:hover {
    cursor: pointer;
    background: rgb(235, 243, 255);
}
.product_grid .item .image {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    min-height: 120px;
}
.product_grid .item .image img {
    display: block;
}
.product_grid .item .description {
    padding: 5px;
    text-align: center;
}

.preload_musk {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(9, 21, 102, 0.161);
    z-index: 9;
    left: 0;
    top: 0;
    color: #091566;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>

    <form action="{{ route('admin.sales.store') }}" id="sales_form" method="post">
        @csrf

    </form>
    <div class="card">
        <div class="card-body">
            @include('backend.global.alert')
            <div class="d-flex justify-content-center">
                <div class="row col-lg-8">
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="customer_id" class="col-sm-3 col-form-label">Select Supplier</label>
                            <div class="col-sm-9">
                                <select name="customer_id" id="customer_id" form="sales_form" class="form-select" required>
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="date" id="date" class="form-control" form="sales_form" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="date" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-top">


            <div class="d-flex justify-content-end">
                <button class="btn btn-success my-2" id="select_product"><i class="fa fa-plus"></i>&nbsp; Select Product</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sales Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col" width="60">Action</th>
                      </tr>
                    </thead>
                    <tbody id="selected_items">
                      
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" style="text-align: right;"><strong>Total</strong></td>
                            <td class="grand_total" style="text-align: right;">0</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            {{-- <hr>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charges</div>
                          </div>
                          <input type="number" class="form-control" form="sales_form" id="other_charges_input" name="other_charges_input" value="0" style="max-width: 200px;" min="0">
                        </li>
                        <li class="list-group-item d-md-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount All</div>
                          </div>
                          <input type="number" class="form-control" form="sales_form" id="discount_all_input" name="discount_all_input" value="0" style="max-width: 200px;" min="0">
                          <select name="discount_type" id="discount_type" form="sales_form" class="form-select" style="max-width: 200px;">
                              <option value="Fixed">Fixed</option>
                              <option value="Per">Per%</option>
                          </select>
                        </li>
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Note</div>
                          </div>
                          <textarea name="note" class="form-control" form="sales_form" id="note" rows="2" placeholder="Note" style="max-width: 500px;"></textarea>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Subtotal</div>
                          </div>
                          <strong class="sub_total">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charge</div>
                          </div>
                          <strong class="other_charges">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount All</div>
                          </div>
                          <strong class="discount_all">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Grand Total</div>
                          </div>
                          <strong class="grand_total">0</strong>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="card border-top-0">
        <div class="card-body">
            <div class="col-md-12 my-4">
                <h4 class="text-success">Make Payment : </h4>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="amount">Amount</label>
                        <input type="number" form="sales_form" class="form-control" id="amount" name="amount" placeholder="Amount" min="0">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select class="form-select select2" form="sales_form" id="payment_method" name="payment_method">
                            @foreach ($payment_methods as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="payment_note" class="form-label">Payment Note</label>
                        <textarea type="text" form="sales_form" class="form-control" id="payment_note" name="payment_note" placeholder="Payment Note"></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2 col-6 mx-auto">
                <button type="submit" form="sales_form" class="btn btn-primary col-6" type="button">Save</button>
                <button class="btn btn-secondary col-6" type="button">Close</button>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>



@push('js')
<script>
let item_ids = [];

$('#select_product').click(function() {
    NL_Modal.open({
        size: 'lg',
        title: 'Select Product',
        preload: true,
        body: function(body_class, obj) {
            $.ajax({
                type: 'get',
                url: `{{ route('admin.sales.get_products') }}`,
                success: function(data) {
                    body_class.html(data);
                }
            });
        }
    });
});

$('#amount').on('input change', function(e) {
    if ($(this).attr('max')) {
        let max_val = Number($(this).attr('max'));
        let value = Number($(this).val());
        if (value > max_val) {
            $(this).val(max_val);
            alert('Payment could not be more then total amount');
        }
    }
});

function add_item(info) { 
    item_ids.push(info.id);
    let html = `
        <tr>
            <td>
                <img src="{{ url('') }}/${info.image}" alt="" width="50">
            </td>
            <td>${info.name}</td>
            <td>
                <input type="hidden" name="product_id[]" form="sales_form" value="${info.id}" />
                <input class="form-control sell_price disabled" form="sales_form" type="number" name="sell_price[]" value="${info.sell_price}" min="0" disabled>
            </td> 
            <td>
                <input type="number" form="sales_form" name="quantity[]" value="1" class="form-control quantity" min="0" max="${info.available_qty}">
            </td>
            <td>
                <input type="number" class="form-control total_amount disabled" name="total_amount[]" value="${info.sell_price}" disabled>
            </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="remove_item(this, ${info.id})"><i class="fa fa-minus"></i></button>
            </td>
        </tr>
    `;
    $('#selected_items').append(html);
    calculate_total();

    reactors();
}
function reactors() {
    $('.quantity, .sell_price, #discount_type, #other_charges_input, #discount_all_input').on('input change', function() {
        calculate_total();
    });
    $('.quantity').on('input change', function(e) {
        let max = Number($(this).attr('max'));
        let min = Number($(this).attr('min'));
        let val = Number($(this).val());
        if (val >= max) {
            e.preventDefault();
            $(this).val(max);
        }
        if (val <= min) {
            e.preventDefault();
            $(this).val(min);
        }
        calculate_total();
    });
}
reactors();

function remove_item(item, id) {
    item_ids = item_ids.filter(item => item != id);
    item.closest('tr').remove();
    calculate_total();
}
function calculate_total() {
    let sell_price = 0;
    // let other_charge = $('#other_charges_input').val();
    let discount_all_input = $('#discount_all_input').val();
    let discount_type = $('#discount_type').val();
    // let total;

    $('.sell_price').each(function() {
        let qty = $(this).parents('tr').find('.quantity');
        let total = Number($(this).val()) * Number(qty.val());
        sell_price += total;

        $(this).parents('tr').find('.total_amount').val(total);
    });
    $('.sub_total').html(sell_price);

    // $('.other_charges').html(other_charge);

    // let total = sell_price;
    
    // if (discount_type == 'Fixed') {
    //     $('.discount_all').html(discount_all_input);
    //     total = total - Number(discount_all_input);
    // }
    // if (discount_type == 'Per') {
    //     $('.discount_all').html(discount_all_input+'%');
    //     total = total - ((Number(discount_all_input) / 100) * total);
    // }

    $('.grand_total').html(sell_price);
    $('#amount').attr('max', sell_price);
}

</script>    
@endpush


@endsection
