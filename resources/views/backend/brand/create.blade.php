@extends('backend.layouts.app')

@section('content')
<h1 class="content_header">Brand Create</h1>

@include('backend.global.alert')

<div class="panel">
    <div class="header">
        <h4>Create Brand</h4>
    </div>
    <div class="body">
        <form action="{{ route('brands.store') }}" method="post">
            @csrf
            <div class="form_group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form_control" placeholder="Brand name">
                        <input type="text" name="details" class="form_control" placeholder="Brand Details">
                    </div>
                </div>
            </div>
            <div class="form_group">    
                <div class="col-md-6 my-3">
                    <label class="block_checkbox">
                        <input class="checkbox primary" type="checkbox">
                        <span>Status</span>
                    </label> 
                </div>
                <div class="col-md-6">
                    <button class="nl primary">Save Brand</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection