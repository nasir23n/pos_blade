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
                            <th scope="col">Action</th>
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
                                <td>
                                    <form action="{{ route('admin.purchase.delete_payment', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        <input type="hidden" name="purchase_id" value="{{ $purchase->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Due Amount</strong></td>
                            <td>{{ $purchase->due_amount }}</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>