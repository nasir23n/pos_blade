@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Sales</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Sales List</h5>
        <a href="{{ route('admin.sales.create') }}" class=" btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Create</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Total Price</th>
                    <th>Paid Amount</th>
                    <th>Due Amount</th>
                    {{-- <th>Payment Status</th> --}}
                    <th>Created By</th>
                    <th style="max-width: 100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->sales_status }}</td>
                        <td>{{ $item->customer->name }}</td>
                        <td>{{ $item->total_price }}</td>
                        <td class="paid_amount">{{ $item->paid_amount }}</td>
                        <td class="due_amount">{{ $item->due_amount }}</td>
                        <td>{{ $item->creator->designation }}</td>
                        <td>
                            <div class="drop_container">
                                <button class="drop btn btn-success btn-sm">
                                    Action <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="drop_element drop_right">
                                    <li>
                                        <a class="view_sales" link={{ route('admin.sales.show', $item) }}><i class="fa fa-eye"></i> View Sales</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.sales.edit', $item) }}"><i class="fa fa-pen"></i> Edit Sales</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="pay_now(this, `{{ $item->id }}`)"><i class="far fa-credit-card"></i>Pay Now</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="view_payments('{{ route('admin.sales.view_payments', $item->id) }}')"><i class="far fa-credit-card"></i> View Payment</a>
                                    </li>
                                    <li>
                                        <form id="conf_frm{{ $item->id }}" action="{{ route('admin.sales.confirm', $item->id) }}" method="post">
                                            @csrf
                                        </form>
                                        <a href="javascript:void(0)" onclick="submit_confirm('#conf_frm{{ $item->id }}')"><i class="far fa-check-circle"></i> Confirm Sales</a>
                                    </li>
                                    <li>
                                        <form id="frm{{ $item->id }}" action="{{ route('admin.sales.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="javascript:void(0)" onclick="submit_delete('#frm{{ $item->id }}')"><i class="far fa-trash-alt"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $categories->links() }} --}}
    </div>
</div>


@push('js')
<script>
function submit_confirm(id) {
    if (confirm('Are you sure?')) {
        $(id).submit();
    }
}
function submit_delete(id) {
    if (confirm('Are you sure?')) {
        $(id).submit();
    }
}
function view_payments(url) {
    NL_Modal.open({
        title: 'Payments',
        size: 'lg',
        preload: true,
        body: function(body_class, obj) {
            $.ajax({
                type: 'get',
                url: url,
                success: function(data) {
                    body_class.html(data);
                }
            });
        }
    });
}

function pay_now(_this, id) {
    NL_Modal.open({
        title: 'Pay Now',
        size: 'md',
        body: function(body_class, obj) {
            body_class.html(`
                <div class="card">
                    <form id="payment_form" target="{{ route('admin.sales.payment') }}" class="card-body" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" min="0" required>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="payment_method" class="form-label">Payment Method</label>
                                <select class="form-select" id="payment_method" name="payment_method" required>
                                    @foreach ($payment_methods as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="payment_note" class="form-label">Payment Note</label>
                                <textarea type="text" class="form-control" id="payment_note" name="payment_note" placeholder="Payment Note"></textarea>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-success sub_btn">Save</button>
                            </div>
                        </div>  
                    </form>
                </div>
            `);

            $('#payment_form').submit(function(e) {
                e.preventDefault();
                let data = $('#payment_form').serialize();
                // let f_data = new FormData($('#payment_form')[0]);
                // f_data.append('_token', '{{ csrf_token() }}')
                $('.sub_btn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...')
                $('.sub_btn').attr('disabled', 'true');
                $.ajax({
                    type : 'POST',
                    url : `{{ route('admin.sales.payment') }}`,
                    data : data+'&_token={{ csrf_token() }}&sale_id='+id,
                    success: function(op) {
                        console.log(op);
                        $(_this).parents('tr').find('.paid_amount').html(op.paid_amount);
                        $(_this).parents('tr').find('.due_amount').html(op.due_amount);
                        obj.close();
                        if (op == 'error') {
                            Swal.fire(
                                'Opps!',
                                'Something Wrong!',
                                'error'
                            );
                        } else {
                            Swal.fire(
                                'Success!',
                                'Payment Created Successfully!',
                                'success'
                            );
                        }
                    }
                });
            });
        }
    });
}

$(function() {
    $('.view_sales').click(function(e) {
        let $url = $(this).attr('link');
        NL_Modal.open({
            title: 'Sales invoice',
            size: 'lg',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: $url,
                    success: function(data) {
                        body_class.html(data);
                    }
                });
            }
        });
    });
    // $('#add_category').click(function() {
    //     NL_Modal.open({
    //         title: 'Create Category',
    //         size: 'md',
    //         preload: true,
    //         body: function(body_class, obj) {
    //             $.ajax({
    //                 type: 'get',
    //                 url: '{{ route("admin.category.create") }}',
    //                 success: function(data) {
    //                     body_class.html(data);
    //                 }
    //             });
    //         }
    //     });
    // });
});
</script>
@endpush

@endsection