@extends('backend.layouts.app')

@section('content')

<div class="mb-2">
    <div class="d-flex justify-content-between mb-4 text-bg-green-200 p-2 rounded">
        <a href="{{ route('admin.purchase.index') }}" class="btn btn-success">
            <i class="fa fa-arrow-circle-left"></i>
            Back
        </a>
        <button class="btn btn-success">
            <i class="fa fa-print"></i>
            Print
        </button>
        <button class="btn btn-success" id="add_product">
            <i class="fa fa-plus-circle"></i>
            Product
        </button>
    </div>
</div>

@include('backend.global.alert')

<div id="purchase_body">
    <div class="card">
        <div class="card-body" id="">
            <div class="info_wrap">
                <div class="me-2 customer_info">
                    <ul>
                        <li>
                            <div class="nms">Supplier:</div>
                            <div class="inf">{{ $purchase->supplier->name }}</div>
                        </li>
                        <li>
                            <div class="nms">Phone:</div>
                            <div class="inf">{{ $purchase->supplier->phone }}</div>
                        </li>
                        <li>
                            <div class="nms">Address:</div>
                            <div class="inf">{{ $purchase->supplier->address }}</div>
                        </li>
                        <li>
                            <div class="nms">Email:</div>
                            <div class="inf">{{ $purchase->supplier->email }}</div>
                        </li>
                    </ul>
                </div>
                <div class="ms-2 customer_info">
                    <ul>
                        <li>
                            <div class="nms">Purchase No:</div>
                            <div class="inf">{{ $purchase->purchase_no }}</div>
                        </li>
                        <li>
                            <div class="nms">Date:</div>
                            <div class="inf">{{ $purchase->date }}</div>
                        </li>
                        <li>
                            <div class="nms">Status:</div>
                            <div class="inf">{{ $purchase->purchase_status }}</div>
                        </li>
                        <li>
                            <div class="nms">Created By:</div>
                            <div class="inf">{{ $purchase->creator->name }}</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 60px;">#</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $total_unit_price = 0;
                            $total_quantity = 0;
                            $ids = [];
                        @endphp
                        
                        @foreach ($purchase->details as $item)
                            @php
                                array_push($ids, $item->product_id);
                                $subtotal = $item->product->latest_price->sell_price * $item->quantity;
                                $total += $subtotal;
                                $total_unit_price += $item->product->latest_price->sell_price;
                                $total_quantity += $item->quantity;
                            @endphp
                            <tr class="actionable_row">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->product->latest_price->sell_price }}TK</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $subtotal }}TK</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-center"><strong>Grand Total</strong></td>
                            <td>{{ $total }}TK</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong>Paid Amount</strong></td>
                            <td>{{ $purchase->paid_amount }}TK</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center"><strong>Due Amount</strong></td>
                            <td>{{ $purchase->due_amount }}TK</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right;"><strong>In Word</strong></td>
                            <td colspan="3" class="text-center"><strong style="text-transform: capitalize;">{{ num_to_word($total) }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            {{-- <div class="d-flex mb-2">
                <strong> In Word Taka: </strong>
                <span style="text-transform: capitalize;">&nbsp;{{ num_to_word($total) }}</span>
            </div> --}}

        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-end">
                <div class="col-md-12">
                    <strong>Payment Information</strong>
                    <table class="table mt-2">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Note</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_paid = 0;
                            @endphp
                            @foreach ($purchase->payment as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->payment_method->name }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>{{ $item->amount }}</td>
                                </tr>
                                @php
                                    $total_paid += $item->amount;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"><strong>Total</strong></td>
                                <td>{{ $total_paid }}</td>
                            </tr>
                            <tr>
                                <td colspan="4"><strong>Due Amount</strong></td>
                                <td>{{ $purchase->due_amount }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
            </div>
        </div>
    </div>
</div>


@push('js')
<script src="{{ asset('backend/common/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
let item_ids = @json($ids);
$('#add_product').click(() => {
    NL_Modal.open({
        size: 'lg',
        preload: true,
        body: function(body_class, obj) {
            $.ajax({
                type: 'get',
                url: `{{ route('admin.purchase.add_products', $purchase->id) }}`,
                success: function(data) {
                    body_class.html(data);
                }
            });
        }
    });
});

function add_item() {
    // add_item
    
}

</script>
@endpush
@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/sweetalert2/sweetalert2.min.css') }}">
<style>
.info_wrap {
    display: flex;
}
.swal2-container {
    z-index: 99999 !important;
}
.customer_info {
    background: #f4f6f9;
    padding: 10px;
    width: 50%;
}

.customer_info ul {
    list-style-type: none;
    padding-left: 0;
    margin-bottom: 0;
}

.customer_info ul li {
    display: flex;
}

.customer_info ul li .nms {
    width: 110px;
    font-weight: bold;
}

.customer_info ul li .inf {
    flex: 1;
}

.bt {
    margin-top: 150px;
}
.bt strong {
    padding-top: 10px;
    border-top: 1px solid #333;
}
.turms {
    display: flex;
    flex-direction: column;
    padding: 10px;
    margin-top: 55px;
    font-size: 14px;
    font-weight: 500;
}
.turms * {
    text-align: center;
}
</style>
    
@endpush
@endsection