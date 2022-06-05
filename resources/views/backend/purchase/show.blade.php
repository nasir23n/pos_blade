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

{{-- 
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
                <td colspan="1"></td>
                <td><strong>Total</strong></td>
                <td>${{ $total_unit_price }}</td>
                <td>{{ $total_quantity }}</td>
                <td>${{ $total }}</td>
            </tr>
        </tfoot>
    </table>
</div> --}}