@extends('backend.layouts.app')

@section('content')

<div class="mb-2">
    <div class="d-flex justify-content-between mb-4 text-bg-green-200 p-2 rounded">
        <a href="{{ route('admin.purchase.index') }}" class="btn btn-success">
            <i class="fa fa-arrow-circle-left"></i>
            Back
        </a>
        <button class="btn btn-success" onclick="print_div('purchase_body')">
            <i class="fa fa-print"></i>
            Print
        </button>
        <button class="btn btn-success" id="add_product">
            <i class="fa fa-plus-circle"></i>
            Product
        </button>
    </div>
</div>

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
                        @endphp
                        @foreach ($purchase->details as $item)
                            @php
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
                            <td colspan="4" class="text-center"><strong>PAID</strong></td>
                            <td>{{ $purchase->paid_amount }}TK</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right;"><strong>In Word</strong></td>
                            <td colspan="3" class="text-center"><strong style="text-transform: capitalize;">{{ num_to_word($total) }}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="d-flex mb-2">
                <strong> In Word Taka: </strong>
                <span style="text-transform: capitalize;">&nbsp;{{ num_to_word($total) }}</span>
            </div>

            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="bt">
                            <strong>Received with good condition by</strong>
                        </div>
                    </div>
                    <div class="col-md-7 d-md-flex justify-content-end">
                        <div class="bt">
                            <strong>Authorized Signature and Company stamp</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="turms">
                <span>Warranty will be void if there is any physical damage,</span>
                <span>Burn issue &amp; Liquid damage to the product or warranty sticker</span>
                <span>is removed and sold goods are not refundable.</span>
                <span>please find out the BCS warranty policy.</span>
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
<script>
$('#add_product').click(() => {
    NL_Modal.open({
        size: 'lg',
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
})
</script>
@endpush
{{--  <div class="p-4 col-md-4">
                <button class="btn btn-primary payment rounded-0" purchase_id="{{ $purchase->id }}">Transaction</button>
                <button class="btn btn-warning rounded-0">Confirm</button> --}}
                {{-- <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Subtotal</div>
                        </div>
                        <strong>{{ $total }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charges</div>
                        </div>
                        <strong>{{ $purchase->other_charge }}</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Total Discount</div>
                        </div>
                        <strong>
                            {{ $purchase->discount_all }}{{ $purchase->discount_type == 'Per' ? '%' : '' }}
                        </strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Grand Total</div>
                        </div>
                        <strong>
                            {{ $purchase->total_price }}
                        </strong>
                    </li>
                </ul> 
            </div>--}}
@push('css')

<style>
.info_wrap {
    display: flex;
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