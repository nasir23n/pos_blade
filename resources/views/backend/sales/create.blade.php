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



.select2-container--default.select2-container--focus,.select2-selection.select2-container--focus,.select2-container--default:focus,.select2-selection:focus,.select2-container--default:active,.select2-selection:active {
	outline:none
}
.select2-container--default .select2-selection--single,.select2-selection .select2-selection--single {
	border:1px solid #d2d6de;
	border-radius: 0px;
	display: flex;
    align-items: center;
    padding: 6px;
    padding-left: 10px;
	height:38px
}
.select2-container--default.select2-container--open {
	border-color:#3c8dbc
}
.select2-dropdown {
	border:1px solid #d2d6de;
	border-radius:0
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color:#3c8dbc;
	color:white
}
.select2-results__option {
	padding:6px 12px;
	user-select:none;
	-webkit-user-select:none
}
.select2-container .select2-selection--single .select2-selection__rendered {
	padding-left:0;
	padding-right:0;
	height:auto;
	margin-top:-4px
}
.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
	padding-right:6px;
	padding-left:20px
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
	height:33px;
	right:3px
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
	margin-top:0
}
.select2-dropdown .select2-search__field,.select2-search--inline .select2-search__field {
	border:1px solid #d2d6de
}
.select2-dropdown .select2-search__field:focus,.select2-search--inline .select2-search__field:focus {
	outline:none;
	border:1px solid #3c8dbc
}
.select2-container--default .select2-results__option[aria-disabled=true] {
	color:#999
}
.select2-container--default .select2-results__option[aria-selected=true] {
	background-color:#ddd
}
.select2-container--default .select2-results__option[aria-selected=true],.select2-container--default .select2-results__option[aria-selected=true]:hover {
	color:#444
}
.select2-container--default .select2-selection--multiple {
	border:1px solid #d2d6de;
	border-radius:0
}
.select2-container--default .select2-selection--multiple:focus {
	border-color:#3c8dbc
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
	border-color:#d2d6de
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
	background-color:#3c8dbc;
	border-color:#367fa9;
	padding:1px 10px;
	color:#fff
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
	margin-right:5px;
	color:rgba(255,255,255,0.7)
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
	color:#fff
}
.select2-container .select2-selection--single .select2-selection__rendered {
	padding-right:10px
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

    <form action="{{ route('admin.sales.store') }}" id="sales_form" method="post">
        @csrf

    </form>
    <div class="card">
        <div class="card-body">
            @include('backend.global.alert')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="customer_id" class="form-label">Select Supplier</label>
                        <select name="customer_id" id="customer_id" form="sales_form" class="form-select select2" required>
                            @foreach ($customers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" form="sales_form" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="date" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="sell_status" class="form-label">Status</label>
                        <select name="sell_status" class="form-select" form="sales_form" id="sell_status" required>
                            <option value="Painding">Painding</option>
                            <option value="Received">Received</option>
                            <option value="Complete">Complete</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="order_no" class="form-label">Order No</label>
                        <input type="text" form="sales_form" class="form-control disabled" value="OD-01" disabled>
                    </div>
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
                        {{-- <th scope="col">Purchase Price</th> --}}
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col" width="60">Action</th>
                      </tr>
                    </thead>
                    <tbody id="selected_items">
                      
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        {{-- <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Total Quantities</div>
                          </div>
                          <label class="control-label text-success">0</label>
                        </li> --}}
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
                          {{-- <input type="text" class="form-control" id="note" name="note" style="max-width: 500px;" placeholder="Note"> --}}
                          <textarea name="note" class="form-control" form="sales_form" id="note" rows="2" placeholder="Note" style="max-width: 500px;"></textarea>
                        </li>
                    </ul>
                </div>
                {{--  --}}
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
            </div>
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

@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/select2/css/select2.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('backend/common/select2/js/select2.full.min.js') }}"></script>
<script>
$('.select2').select2();
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
    let other_charge = $('#other_charges_input').val();
    let discount_all_input = $('#discount_all_input').val();
    let discount_type = $('#discount_type').val();

    $('.sell_price').each(function() {
        let qty = $(this).parents('tr').find('.quantity');
        let total = Number($(this).val()) * Number(qty.val());

        sell_price += total;

        $(this).parents('tr').find('.total_amount').val(total);
    });
    $('.sub_total').html(sell_price);

    $('.other_charges').html(other_charge);

    let total = sell_price + Number(other_charge);

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
