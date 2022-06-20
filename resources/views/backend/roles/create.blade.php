@extends('backend.layouts.app')

@section('content')

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
            <form action="{{ isset($role) ? route('admin.update-role', $role) : route('admin.store-roles') }}" method="POST">
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
                    <div class="form-row">
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
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
