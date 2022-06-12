@extends('backend.layouts.app')

@section('content')

    <h5 class="content_header">Edit Purchase</h5>
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
    {{-- @include('backend.global.alert') --}}
    {{-- <div class="alert alert-primary d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
            An example alert with an icon
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}

    <form action="{{ route('admin.purchase.store') }}" id="purchase_form" method="post">
        @csrf
    </form>
    {{-- {{ dd($) }} --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="row col-lg-8">
                    <div class="col-md-12">
                        <div class="mb-3">
                            Purchase No: <strong> {{ $purchase->purchase_no }}</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- <div class="mb-3">
                            <label for="supplier_id" class="form-label">Select Supplier</label>
                            <select name="supplier_id" id="supplier_id" form="purchase_form" class="form-select" required>
                                @foreach ($suppliers as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="mb-3 row">
                            <label for="supplier_id" class="col-sm-3 col-form-label">Select Supplier</label>
                            <div class="col-sm-9">
                                <select name="supplier_id" id="supplier_id" form="purchase_form" class="form-select" required>
                                    @foreach ($suppliers as $item)
                                        <option value="{{ $item->id }}" {{ ($purchase->supplier_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="date" id="date" class="form-control" form="purchase_form" value="{{ \Carbon\Carbon::now()->format($purchase->date) }}" id="date" required>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="mb-3">
                            <label for="purchase_status" class="form-label">Status</label>
                            <select name="purchase_status" class="form-select" form="purchase_form" id="purchase_status" required>
                                <option value="Painding">Painding</option>
                                <option value="Received">Received</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            {{-- <input type="search" class="form-control" placeholder="Search product"> --}}

            {{-- <div class="product_grid" id="products"></div> --}}
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
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col" width="60">Action</th>
                      </tr>
                    </thead>
                    <tbody id="selected_items">
                        @foreach ($purchase->details as $item) 
                        @php
                            $product = $item->product;
                            // dd();
                        @endphp
                        <tr>
                            <td>
                                <img src="{{ url('') }}/{{ $product->image }}" alt="" width="50">
                            </td>
                            <td>{{ $product->name }}}</td>
                            <td>
                                <input type="hidden" name="product_id[]" form="purchase_form" value="{{ $product->id }}}" />
                                <input class="form-control sell_price" form="purchase_form" type="number" name="sell_price[]" value="{{ $item->price_was->sell_price }}" min="0" disabled>
                            </td>
                            <td>
                                <input type="number" form="purchase_form" class="form-control purchase_price" name="purchase_price[]" value="{{ $item->price_was->purchase_price }}" min="0" disabled>
                            </td>
                            <td>
                                <input type="number" form="purchase_form" name="quantity[]" value="{{ $item->quantity }}" class="form-control quantity" min="0">
                            </td>
                            <td>
                                <input type="number" class="form-control total_amount disabled" name="total_amount[]" value="{{ $item->total }}" disabled>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger" onclick="remove_item(this, '{{ $item->product_id }}')"><i class="fa fa-minus"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: right;"><strong>Total:</strong></td>
                            <td class="sub_total" colspan="2">{{ $purchase->total_price }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    {{-- <ul class="list-group">
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charges</div>
                          </div>
                          <input type="number" class="form-control" form="purchase_form" id="other_charges_input" name="other_charges_input" value="{{ $purchase->other_charge }}" style="max-width: 200px;" min="0">
                        </li>
                        <li class="list-group-item d-md-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount All</div>
                          </div>
                          <input type="number" class="form-control" form="purchase_form" id="discount_all_input" name="discount_all_input" value="{{ $purchase->discount_all }}" style="max-width: 200px;" min="0">
                          <select name="discount_type" id="discount_type" form="purchase_form" class="form-select" style="max-width: 200px;">
                              <option value="Fixed" {{ ($purchase->discount_type == 'Fixed') ? 'selected' : '' }}>Fixed</option>
                              <option value="Per" {{ ($purchase->discount_type == 'Per') ? 'selected' : '' }}>Per%</option>
                          </select>
                        </li>
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Note</div>
                          </div>
                          <textarea name="note" class="form-control" form="purchase_form" id="note" rows="2" placeholder="Note" style="max-width: 500px;">{{ $purchase->note }}</textarea>
                        </li>
                    </ul> --}}
                </div>
                {{--  --}}
                <div class="col-md-6">
                    {{-- <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Subtotal</div>
                          </div>
                          <strong class="sub_total">{{ $purchase->details->sum('total') }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charge</div>
                          </div>
                          <strong class="other_charges">{{ $purchase->other_charge }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount All</div>
                          </div>
                          <strong class="discount_all">{{ $purchase->discount_all }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Grand Total</div>
                          </div>
                          <strong class="grand_total">{{ $purchase->total_price }}</strong>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <p>Previous Payments Information :</p>

            <table class="table">
                <thead style="background: var(--bs-gray-200)">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Payment Method</th>
                        <th>Note</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchase->payment as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->payment_method->name }}</td>
                        <td>{{ $item->note }}</td>
                        <td>{{ $item->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card border-top-0">
        <div class="card-body">
            <div class="col-md-12 my-4">
                <h4 class="text-success">Make Payment : </h4>
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
                                {{-- <option value="Card">Card</option>
                                <option value="Paytm">Bksh</option>
                                <option value="Finance">Nogod</option> --}}
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="payment_note" class="form-label">Payment Note</label>
                        <textarea type="text" form="purchase_form" class="form-control" id="payment_note" name="payment_note" placeholder="Payment Note"></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2 col-6 mx-auto">
                <button type="submit" form="purchase_form" class="btn btn-primary col-6" type="button">Save</button>
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
                url: `{{ route('admin.purchase.get_products') }}`,
                success: function(data) {
                    body_class.html(data);
                    // body_class.prepend(`<div class="my-3" id="notify_wrap"></div>`);
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
        // if (Number($(this).val()) > max_val) {
        //     return false;
        //     console.log(max_val);
        // }
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
                <input type="hidden" name="product_id[]" form="purchase_form" value="${info.id}" />
                <input class="form-control sell_price" form="purchase_form" type="number" name="sell_price[]" value="${info.sell_price}" min="0">
            </td>
            <td>
                <input type="number" form="purchase_form" class="form-control purchase_price" name="purchase_price[]" value="${info.purchase_price}" min="0">
            </td>
            <td>
                <input type="number" form="purchase_form" name="quantity[]" value="1" class="form-control quantity" min="0">
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
    $('.quantity, .purchase_price, #discount_type, #other_charges_input, #discount_all_input').on('input change', function() {
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
    let purchase_price = 0;
    let other_charge = $('#other_charges_input').val();
    let discount_all_input = $('#discount_all_input').val();
    let discount_type = $('#discount_type').val();

    $('.purchase_price').each(function() {
        let qty = $(this).parents('tr').find('.quantity');
        let total = Number($(this).val()) * Number(qty.val());

        purchase_price += total;

        $(this).parents('tr').find('.total_amount').val(total);
    });
    $('.sub_total').html(purchase_price);

    $('.other_charges').html(other_charge);

    let total = purchase_price + Number(other_charge);

    if (discount_type == 'Fixed') {
        $('.discount_all').html(discount_all_input);
        total = total - Number(discount_all_input);
    }
    if (discount_type == 'Per') {
        $('.discount_all').html(discount_all_input+'%');
        total = total - ((Number(discount_all_input) / 100) * total);
    }

    $('.grand_total').html(total);
    $('#amount').attr('max', total);
}

</script>    
@endpush


@endsection
