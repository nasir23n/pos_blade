@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Payment Method</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Payment Method List</h5>
        <button class=" btn btn-primary" id="add_payment_method"><i class="fa fa-plus"></i></button>
    </div>
    <div class="card-body table-responsive">
        <table class="table">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Is Default</th>
                    <th>Created At</th>
                    <th style="max-width: 100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment_methodes as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset($item->image) }}" width="50" alt="">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if ($item->status == 1)
                                <span class="badge text-bg-green-600">Active</span>
                            @else
                                <span class="badge text-bg-red-600">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->is_default == 1)
                                <span class="badge text-bg-green-600">Default</span>
                            @else
                                <span class="badge text-bg-red-600">No</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-sm btn-primary edit" link={{ route('admin.payment_method.edit', $item) }}><i class="fa fa-pen"></i></button>
                                <form action="{{ route('admin.payment_method.delete', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>                                
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@push('js')
<script>
$(function() {
    $('.edit').click(function(e) {
        let $url = $(this).attr('link');
        NL_Modal.open({
            title: 'Edit Payment Method',
            size: 'md',
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
    $('#add_payment_method').click(function() {
        NL_Modal.open({
            title: 'Create Payment Method',
            size: 'md',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: '{{ route("admin.payment_method.create") }}',
                    success: function(data) {
                        body_class.html(data);
                    }
                });
            }
        });
    });
});
</script>
@endpush

@endsection