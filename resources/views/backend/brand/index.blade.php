@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Brand</h1>

<br>
@include('backend.global.alert')

<div class="card">
    <div class="card-header">
        <h5>Brand List</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
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
        order: [[ 0, "desc" ]],
        ajax: "{{ route('admin.brands.index') }}",
        columns: [
            {
                data: 'id'
            },
            { data: 'name' },
            { data: 'details' },
            { data: 'created_at' },
            { data: 'updated_at' },
            {
                data: "action", 
                render: function(data,type,full,meta) { 
                    return `
                        <button class="edit btn btn-sm btn-info"><i class="fa fa-pen"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    `;
                },
                orderable: false,
            }
        ],
        initComplete: function(settings, json) {
            $('.edit').click(function() {
                console.log('some');
            });
        }
    });
    
});
</script>
@endpush

@endsection