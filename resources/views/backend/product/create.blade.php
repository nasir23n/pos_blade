@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Product Create</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header">
        <h4>Create Product</h4>
    </div>
    <div class="card-body">
        @include('backend.product.form')
    </div>
</div>
@endsection