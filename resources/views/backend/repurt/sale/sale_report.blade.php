@extends('backend.layouts.app')

@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<style>
.datepicker {
  background-color: #fff;
  border-radius: 0 !important;
  padding: 15px 20px !important;
  align-content: center !important;
}

.datepicker-dropdown.datepicker-orient-left:before {
  left: calc(50% - 6px) !important;
}

.datepicker-dropdown.datepicker-orient-left:after {
  left: calc(50% - 5px) !important;
}

.datepicker table tr td.today, span.focused {
  border-radius: 50% !important;
  background-image: linear-gradient(#FFF3E0, #FFE0B2);
}

.datepicker table tr td.today.range {
  background-image: linear-gradient(#eeeeee, #eeeeee) !important;
  border-radius: 0 !important;
}


.range {
  color: #4CAF50 !important;
}

.prev, .next, .datepicker-switch {
  border-radius: 0 !important;
  padding: 10px 10px 10px 10px !important;
  font-size: 18px;
  opacity: 0.7;
}

.prev:hover, .next:hover, .datepicker-switch:hover {
  background-color: inherit !important;
  opacity: 1;
}

@media screen and (max-width: 500px) {
  .datepicker-dropdown.datepicker-orient-right:before {
    right: calc(50% - 6px) !important;
  }

  .datepicker-dropdown.datepicker-orient-right:after {
    right: calc(50% - 5px) !important;
  }
}

#report_body {
    position: relative;
}

.report_loading {
    display: none;
    position: absolute;
    z-index: 2;
    top: 20px;
    left: calc(50% - 24px);
}
#report_body.loading .report_loading {
    display: block
}
#report_body.loading::before {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background: #4caf4f22;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}
</style>
@endpush
<div class="card">
    <div class="card-header">
       <h5 class="card-title">Please Enter Valid Information</h5>
    </div>

    <form action="{{ route('admin.reports.sales.filter') }}" id="report_form" method="GET">
       @csrf
       <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">Start Date</div>
                        <label class="input-group mb-3">
                            <input type="text" name="start_date" class="form-control datepicker_fld" placeholder="Start Date" autocomplete="off">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2">End Date</div>
                        <label class="input-group mb-3">
                            <input type="text" name="end_date" class="form-control datepicker_fld" placeholder="End Date" autocomplete="off">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">Customer</div>
                        <select name="customer_id" class="form-select">
                            <option value="" selected>Open this select menu</option>
                            @foreach ($customers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
       </div>

       <div class="card-footer d-flex justify-content-center gap-3">
           <button type="submit" class=" btn btn-success">Show</button>
           <button type="button" class="btn btn-warning" onclick="document.getElementById('report_form').reset()">Clear</button>
       </div>

    </form>
 </div>
 <br>
 <div class="card">
    <div class="card-header">
        Purchase
    </div>
    <div class="card-body table-responsive" id="report_body">
        <div class="spinner-border report_loading" role="status"></div>
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
    </div>
 </div>

@push('js')
<script src="{{ asset('backend/common/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
$('.datepicker_fld').datepicker();
$('#report_form').submit(function(e) {
    e.preventDefault();
    let data = $('#report_form').serialize();
    $('#report_body').addClass('loading');
    $.ajax({
        type : 'GET',
        url : `{{ route('admin.reports.sales.filter') }}`,
        data : data+'&_token={{ csrf_token() }}',
        success: function(op) {
            $('#report_body').removeClass('loading');
            $('#report_body').html(op);
        }
    });
});

</script>
@endpush

@endsection