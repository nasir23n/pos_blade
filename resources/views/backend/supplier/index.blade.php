@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Supplier</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Supplier List</h5>
        <button class=" btn btn-primary" id="add_supplier"><i class="fa fa-plus"></i></button>
    </div>
    <div class="card-body table-responsive">
        <table class="table">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th style="max-width: 100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            @if ($item->status == 1)
                                <span class="badge text-bg-green-600">Active</span>
                            @else
                                <span class="badge text-bg-red-600">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-sm btn-primary edit" link={{ route('admin.supplier.edit', $item) }}><i class="fa fa-pen"></i></button>
                                <form action="{{ route('admin.supplier.delete', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
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
        {{ $suppliers->links() }}
    </div>
</div>


@push('js')
<script>
$(function() {
    $('.edit').click(function(e) {
        let $url = $(this).attr('link');
        NL_Modal.open({
            title: 'Edit Supplier',
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
    $('#add_supplier').click(function() {
        NL_Modal.open({
            title: 'Create Supplier',
            size: 'md',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: '{{ route("admin.supplier.create") }}',
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