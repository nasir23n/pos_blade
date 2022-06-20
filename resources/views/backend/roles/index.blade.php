@extends('backend.layouts.app')
@push('css')
    <link href="{{ asset('backend/asset/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <h4 class="content_header">Role Management</h4>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="float-left">Roles List</h4>
            <a href="{{ route('admin.create-roles') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                aria-describedby="example1_info">
                <thead>
                    <tr role="row">
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Note</th>
                        <th>Permissions</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->slug }}</td>
                            <td>{{ $role->note }}</td>
                            <td>
                                @if ($role->permissions->count() > 0)
                                    <div class="badge text-bg-green-700">{{ $role->permissions->count() }}</div>
                                @else
                                    <div class="badge text-bg-yellow-700">No Permission Found :)</div>
                                @endif
                            </td>
                            <td>
                                <a title="Permissions" href="{{ route('admin.edit-roles', $role) }}"
                                    class="btn btn-success btn-sm">Permissions</a>
                                @if ($role->deleteable)
                                    <form class="d-inline-block" action="{{ route('admin.delete-role', $role) }}"
                                        method="post" onsubmit="return confirm('Are you sure to delete this roles?')">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Delete" type="submit" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
