@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Purchase</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Purchase List</h5>
        <button class=" btn btn-primary" id="add_category"><i class="fa fa-plus"></i></button>
    </div>
    <div class="card-body table-responsive">
        <table class="table">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Date</th>
                    <th>Purchase Status</th>
                    <th>Supplier Name</th>
                    <th>Total Price</th>
                    <th>Paid Amount</th>
                    <th>Due Amount</th>
                    {{-- <th>Payment Status</th> --}}
                    <th>Created By</th>
                    <th style="max-width: 100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->purchase_status }}</td>
                        <td>{{ $item->supplier->name }}</td>
                        <td>{{ $item->total_price }}</td>
                        <td>{{ $item->paid_amount }}</td>
                        <td>{{ $item->due_amount }}</td>
                        <td>{{ $item->creator->designation }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="border-radius: 4px; overflow: hidden;">
                                <button type="button" class="btn btn-sm btn-warning edit" link={{ route('admin.category.edit', $item) }}><i class="fa fa-eye"></i></button>
                                <button type="button" class="btn btn-sm btn-primary edit" link={{ route('admin.category.edit', $item) }}><i class="fa fa-pen"></i></button>
                                <form action="{{ route('admin.category.delete', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
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
        {{-- {{ $categories->links() }} --}}
    </div>
</div>


@push('js')
<script>
$(function() {
    $('.edit').click(function(e) {
        let $url = $(this).attr('link');
        NL_Modal.open({
            title: 'Edit Brand',
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
    $('#add_category').click(function() {
        NL_Modal.open({
            title: 'Create Category',
            size: 'md',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: '{{ route("admin.category.create") }}',
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