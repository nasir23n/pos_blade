<table class="table table-bordered">
    <thead class="">
        <tr>
            <th>S/L</th>
            <th>Date</th>
            <th>Sales Id</th>
            <th>Customer Name</th>
            <th>Sales Status</th>
            <th>Total</th>
            <th>Paid Amount</th>
            <th>Due Amount</th>
            <th>Total Item</th>
            {{-- <th>Payment Status</th> --}}
            <th>Created By</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->customer->name }}</td>
                <td>
                    @if ($item->sales_status == 'Pending')
                        <div class="badge bg-danger">{{ $item->sales_status }}</div>
                    @elseif ($item->sales_status == 'Received')
                        <div class="badge bg-warning">{{ $item->sales_status }}</div>
                    @elseif ($item->sales_status == 'Complete')
                        <div class="badge bg-success">{{ $item->sales_status }}</div>
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