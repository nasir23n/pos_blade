@extends('backend.layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <strong>Purchase Invoice</strong>
        <button class="btn text-bg-purple-600" onclick="print_div('purchase_body')">Print</button>
        <a href="{{ route('admin.purchase.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="card-body" id="purchase_body">
        <br>
        <div class="row invoice-info">
            <div class="col-sm-6 invoice-col">
                <i>Supplier Details</i>
                <address>
                    <span>Name: <strong>{{ $purchase->supplier->name }}</strong><br></span>
                    <span>Phone: <strong>{{ $purchase->supplier->phone }}</strong><br></span>
                    <span>Email: <strong>{{ $purchase->supplier->email }}</strong><br></span>
                    <span>Address: <strong>{{ $purchase->supplier->address }}</strong><br></span>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-6 invoice-col">
                <b>Invoice #SL0{{ $purchase->id }}</b><br>
                <b>Status: {{ $purchase->process_status }}</b><br>
                <b>Date: {{ $purchase->date }}</b><br>
            </div>
            <!-- /.col -->
        </div>


        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">#</th>
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
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->product->name }}</td>
                            <td>${{ $item->product->latest_price->sell_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ $subtotal }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-secondary">
                    <tr>
                        {{-- <td colspan="1"></td> --}}
                        <td colspan="2"><strong>Total</strong></td>
                        <td>${{ $total_unit_price }}</td>
                        <td>{{ $total_quantity }}</td>
                        <td>${{ $total }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>


        <div class="row justify-content-end">
            <div class="col-md-8">
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
            <div class="p-4 col-md-4">
                <ul class="list-group">
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
            </div>
        </div>
    </div>
</div>

@endsection