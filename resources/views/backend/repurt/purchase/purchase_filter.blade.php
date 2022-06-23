<table class="table table-bordered">
    <thead class="">
        <tr>
            <th>S/L</th>
            <th>Date</th>
            <th>Purchase Id</th>
            <th>Supplier Name</th>
            <th>Purchase Status</th>
            <th>Total</th>
            <th>Paid Amount</th>
            <th>Due Amount</th>
            <th>Total Item</th>
            {{-- <th>Payment Status</th> --}}
            <th>Created By</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($purchases as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->purchase_no }}</td>
                <td>{{ $item->supplier->name }}</td>
                <td>
                    @if ($item->purchase_status == 'Pending')
                        <div class="badge bg-danger">{{ $item->purchase_status }}</div>
                    @elseif ($item->purchase_status == 'Received')
                        <div class="badge bg-warning">{{ $item->purchase_status }}</div>
                    @elseif ($item->purchase_status == 'Complete')
                        <div class="badge bg-success">{{ $item->purchase_status }}</div>
                    @endif
                </td>
                <td>{{ $item->total_price }}TK</td>
                <td class="paid_amount">{{ $item->paid_amount }}</td>
                <td class="due_amount">
                    <div class="check_wrap">
                        @if ($item->due_amount > 0)
                            <span class="check danger"></span>{{ $item->due_amount }}TK
                        @else
                            <span class="check success"></span>{{ $item->due_amount }}TK
                        @endif
                    </div>
                </td>
                <td>{{ $item->details->count() }}</td>
                <td>{{ $item->creator->designation }}</td>
            </tr>
        @endforeach
    </tbody>
</table>