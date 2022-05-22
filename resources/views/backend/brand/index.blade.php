@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Brand</h1>


@include('backend.global.alert')

<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Brand List</h5>
        <button class=" btn btn-primary" id="add_brand"><i class="fa fa-plus"></i></button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- start data table -->
            <table id="example" class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </thead>
                <tbody></tbody>
                <tfoot></tfoot>
            </table>
            <!-- end data table -->
        </div>

    </div>
</div>



@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/DataTables-1.12.1/css/dataTables.bootstrap5.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('backend/common/DataTables-1.12.1/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/common/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') }}"></script>

<script>
$(document).ready(function(){
    $('#example').DataTable({
        processing: true,
        serverSide: true,
        // order: [[ 0, "asc" ]],
        ajax: "{{ route('admin.brands.index') }}",
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'details' },
            { data: 'created_at' },
            { data: 'updated_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
            // {
            //     data: "action", 
            //     render: function(data,type,full,meta) { 
            //         return `
            //             <button class="edit btn btn-sm btn-info"><i class="fa fa-pen"></i></button>
            //             <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
            //         `;
            //     },
            //     orderable: false,
            // }
        ],
        initComplete: function(settings, json) {
            $('.edit').click(function() {
                console.log('some');
            });
        }
    });

    $('#add_brand').click(function() {
        NL_Modal.open({
            title: 'Create Brand',
            size: 'md',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: '{{ route("admin.brands.create") }}',
                    success: function(data) {
                        body_class.html(data);
                    }
                });
                console.log(body_class);
            }
        });
    });
    
});
</script>
@endpush

@endsection