@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Brand Create</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header">
        <h4>Create Brand</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.brands.store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Brand name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Brand Name">
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Brand Details</label>
                            <input type="text" name="details" class="form-control" id="details" placeholder="name@example.com">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" name="status" type="checkbox" id="status">
                            <label class="form-check-label" for="status">
                                Status
                            </label>
                        </div>
                        <button class="btn btn-primary">Save Brand</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection