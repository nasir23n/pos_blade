@extends('backend.layouts.app')

@section('content')

<h1 class="content_header">Products</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Product List</h5>
        <a href="{{ route('admin.product.create') }}" class=" btn btn-primary" id="add_category"><i class="fa fa-plus"></i></a>
    </div>
    <div class="card-body table-responsive">
        <table class="table">
            <thead class="">
                <tr>
                    <th>S/L</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th>Name</th>
                    <th>brand</th>
                    <th>Category</th>
                    <th>Unit</th>
                    <th>Sales Price</th>
                    <th>Created At</th>
                    <th style="max-width: 100px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset($item->image) }}" width="50" alt="">
                        </td>
                        <td>
                            <strong class="badge text-bg-green-500">{{ $item->creator->name }}</strong>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->brand->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->unit->name }}</td>
                        <td>{{ $item->latest_price->sell_price }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-sm btn-primary edit" link={{ route('admin.category.edit', $item) }}><i class="fa fa-pen"></i></button>
                                <form action="{{ route('admin.product.delete', $item) }}" method="post" onsubmit="return confirm('Are you sure?')">
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
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>


@push('js')
<script>
$(function() {
    // $('.edit').click(function(e) {
    //     let $url = $(this).attr('link');
    //     NL_Modal.open({
    //         title: 'Edit Brand',
    //         size: 'md',
    //         preload: true,
    //         body: function(body_class, obj) {
    //             $.ajax({
    //                 type: 'get',
    //                 url: $url,
    //                 success: function(data) {
    //                     body_class.html(data);
    //                 }
    //             });
    //         }
    //     });
    // });
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