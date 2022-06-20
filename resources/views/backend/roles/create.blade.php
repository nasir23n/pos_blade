@extends('backend.layouts.app')

@section('content')

@include('backend.global.alert')

    <h4 class="content_header">Create Role</h4>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            @isset($role)
                <h4 class="float-left">Edit Roles</h4>
            @else
                <h4 class="float-left">Create Roles</h4>
            @endisset
            <a href="{{ route('admin.roles') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Back to list</a>
        </div>
        <div class="card-body">
            <form id="role_permission" action="{{ isset($role) ? route('admin.update-role', $role) : route('admin.store-roles') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ isset($role) ? $role->name : old('name') }}"
                            class="form-control  @error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{ isset($role) ? $role->slug : old('slug') }}"
                            class="form-control  @error('slug') is-invalid @enderror" required>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Note</label>
                        <input type="text" name="note" value="{{ isset($role) ? $role->note : old('note') }}"
                            class="form-control  @error('note') is-invalid @enderror">
                        @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <br>
                @forelse($modules->chunk(2) as $key => $chunks)
                    <div class="row">
                        @foreach ($chunks as $key => $module)
                            <div class="col" style="border: 1px solid #efefef;padding: 10px">
                                <h5>Module: <span style="color: #3F6AD8">{{ $module->name }}</span></h5>

                                @foreach ($module->permissions as $key => $permission)
                                    {{-- $permission->slug === 'admin.dahboard' --}}
                                    @if ($isSuper)
                                        <div class="mb-3 ml-4">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="permission-{{ $permission->id }}" name="permissions[]"
                                                    value="{{ $permission->id }}"
                                                    @isset($role) @foreach ($role->permissions as $rPermission)
                                                  {{ $permission->id == $rPermission->id ? 'checked' : '' }}
                                              @endforeach @endisset>
                                                <label class="custom-control-label"
                                                    for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                    @else
                                        @if ($permission->slug === 'admin.edit-admin' || $permission->slug === 'admin.delete-admin')
                                            @continue
                                        @endif
                                        <div class="mb-3 ml-4">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="permission-{{ $permission->id }}" name="permissions[]"
                                                    value="{{ $permission->id }}"
                                                    @isset($role) @foreach ($role->permissions as $rPermission)
                                                  {{ $permission->id == $rPermission->id ? 'checked' : '' }}
                                              @endforeach @endisset>
                                                <label class="custom-control-label"
                                                    for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @empty
                    <div class="row">
                        <div class="col text-center">
                            <strong>No Module Found</strong>
                        </div>
                    </div>
                @endforelse
                <hr>
                <div class="d-flex justify-content-between">
                    <button type="submit" form="role_permission" class="btn btn-primary">Submit</button>
                    <button type="button" id="create_permission" class="btn btn-dark"><i class="fa fa-plus"></i> Create Permission</button>
                    <button type="button" id="create_module" class="btn btn-success"><i class="fa fa-plus"></i> Create Module</button>
                </div>
            </form>
        </div>
    </div>

    

@push('js')
<script>
$('#create_permission').click(function() {
    NL_Modal.open({
        title: 'Create Permission',
        size: 'lg',
        body: function(body_class) {
            let p_form = `<form action="{{ route('admin.create_permission') }}" class="row px-md-3" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <div class="mb-3">
                        <label for="module" class="form-label">Select Module</label>
                        <select name="module" class="form-select" id="module" required>
                            @foreach ($modules as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Permission Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Permission name" required>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Permission slug" required>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Save<button>
                    </div>
                </div>
            </form>`;
            body_class.html(p_form);
        }
    });
});
$('#create_module').click(function() {
    NL_Modal.open({
        title: 'Create Permission',
        size: 'lg',
        body: function(body_class) {
            let p_form = `<form action="{{ route('admin.create_module') }}" class="row px-md-3" method="POST">
                @csrf
                <div class="form-group col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Module Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Module name" required>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Save<button>
                    </div>
                </div>
            </form>`;
            body_class.html(p_form);
        }
    });
});
</script>
@endpush

@endsection
