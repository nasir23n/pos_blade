<br>
<div class="row invoice-info">
    <div class="col-sm-6 invoice-col">
        <i>Supplier Details</i>
        <address>
            <span>Name: <strong>{{ $sale->customer->name }}</strong><br></span>
            <span>Phone: <strong>{{ $sale->customer->phone }}</strong><br></span>
            <span>Email: <strong>{{ $sale->customer->email }}</strong><br></span>
            <span>Address: <strong>{{ $sale->customer->address }}</strong><br></span>
        </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-6 invoice-col">
        <b>Invoice #SL0{{ $sale->id }}</b><br>
        <b>Status: {{ $sale->sales_status }}</b><br>
        <b>Date: {{ $sale->date }}</b><br>
    </div>
    <!-- /.col -->
</div>

<div class="table-responsive mt-3">
    <table class="table table-striped">
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
            @foreach ($sale->details as $item)
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
                <td colspan="1"></td>
                <td><strong>Total</strong></td>
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
                @foreach ($sale->payment as $item)
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
                    <td>{{ $sale->due_amount }}</td>
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
                <strong>{{ $sale->other_charge }}</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Total Discount</div>
                </div>
                <strong>
                    {{ $sale->discount_all }}{{ $sale->discount_type == 'Per' ? '%' : '' }}
                </strong>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Grand Total</div>
                </div>
                <strong>
                    {{ $sale->total_price }}
                </strong>
            </li>
        </ul>
    </div>
</div>