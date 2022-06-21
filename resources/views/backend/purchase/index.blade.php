@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Purchase</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between border-primary"  style="border-top: 4px solid;border-bottom:0;background:transparent;">
        <h5 class="m-0">Purchase List</h5>
        <a href="{{ route('admin.purchase.create') }}" class=" btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Create</a>
    </div>
    {{--<div class="card-body">
         <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
              </div>
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
              </div>
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Subheading</div>
                Content for list item
              </div>
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
          </ol>
          <div class="list-group">
            @foreach ($purchases as $item) 
            <div class="list-group-item">
                <div class="d-flex w-100 justify-content-between">
                    <div>
                        Supplier: <strong>{{ $item->supplier->name }}</strong><br>
                        Date: <strong>{{ $item->date }}</strong>
                    </div>
                    <div>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="border-radius: 4px; overflow: hidden;">
                            <a class="btn btn-sm btn-warning view_purchase" href={{ route('admin.purchase.show', $item) }}><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.purchase.edit', $item) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <button type="submit" form="form{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>                                
                            <form id="form{{ $item->id }}" action="{{ route('admin.category.delete', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </div>
            @endforeach
        </div> 
    </div>--}}
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Date</th>
                    <th>Purchase Status</th>
                    <th>Supplier Name</th>
                    <th>Total Price</th>
                    <th>Paid Amount</th>
                    <th>Due Amount</th>
                    <th>Total Item</th>
                    {{-- <th>Payment Status</th> --}}
                    <th>Created By</th>
                    <th style="max-width: 80px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            @if ($item->purchase_status == 'Pending')
                                <div class="badge bg-danger">{{ $item->purchase_status }}</div>
                            @elseif ($item->purchase_status == 'Received')
                                <div class="badge bg-warning">{{ $item->purchase_status }}</div>
                            @elseif ($item->purchase_status == 'Complete')
                                <div class="badge bg-success">{{ $item->purchase_status }}</div>
                            @endif
                        </td>
                        <td>{{ $item->supplier->name }}</td>
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
                        <td>
                            <div class="drop_container">
                                <button class="drop btn btn-success">
                                    Action <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="drop_element drop_right">
                                    <li>
                                        <a href={{ route('admin.purchase.show', $item) }}><i class="fa fa-eye"></i> View Purchase</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.purchase.edit', $item) }}" ><i class="fa fa-pen"></i> Edit Purchase</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="pay_now(this, `{{ $item->id }}`)"><i class="far fa-credit-card"></i>Pay Now</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="view_payments('{{ route('admin.purchase.view_payments', $item->id) }}')"><i class="far fa-credit-card"></i> View Payment</a>
                                    </li>
                                    <li>
                                        <form id="conf_frm{{ $item->id }}" action="{{ route('admin.purchase.confirm', $item->id) }}" method="post">
                                            @csrf
                                        </form>
                                        <a href="javascript:void(0)" onclick="submit_confirm('#conf_frm{{ $item->id }}')"><i class="far fa-check-circle"></i> Confirm Purchase</a>
                                    </li>
                                    <li>
                                        <form id="frm{{ $item->id }}" action="{{ route('admin.purchase.delete', $item->id) }}" method="post">
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
        {{-- {{ $purchases->links() }} --}}
    </div>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/sweetalert2/sweetalert2.min.css') }}">
@endpush
@push('js')
<script src="{{ asset('backend/common/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
function submit_delete(id) {
    if (confirm('Are You sure?')) {
        $(id).submit();
    }
}
function submit_confirm(id) {
    if (confirm('Are You sure?')) {
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
                    <form id="payment_form" target="{{ route('admin.purchase.payment') }}" class="card-body" method="POST">
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
                    url : `{{ route('admin.purchase.payment') }}`,
                    data : data+'&_token={{ csrf_token() }}&purchase_id='+id,
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

</script>
@endpush

@endsection