@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Brand Create</h1>

@include('backend.global.alert')

<div class="card">
    <div class="card-header">
        <h4>Create Brand</h4>
    </div>
    <div class="card-body">
        @include('backend.brand.form')
    </div>
</div>
@endsection