@extends('backend.layouts.app')

@section('content')

    <h1 class="content_header">Purchase</h1>
    <style>
        .product_grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 10px;
            margin: 20px 0;
        }
        .product_grid .item.active {
            background: #cfe2ff !important;
        }
        .product_grid .item {
            border: 1px solid #ddd;
            margin-left: -1px;
            margin-top: -1px;
            display: flex;
            flex-direction: column;
            user-select: none;
            transition: all 0.3s ease-in-out;
        }
        .product_grid .item:hover {
            cursor: pointer;
            background: rgb(235, 243, 255);
        }
        .product_grid .item .image {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            min-height: 120px;
        }
        .product_grid .item .image img {
            display: block;
        }
        .product_grid .item .description {
            padding: 5px;
            text-align: center;
        }
    </style>
    {{-- @include('backend.global.alert') --}}
    {{-- <div class="alert alert-primary d-flex align-items-center alert-dismissible fade show" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
            An example alert with an icon
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="supplier_id" class="form-label">Select Supplier</label>
                        <select name="supplier_id" id="supplier_id" class="form-select" required>
                            @foreach ($suppliers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="purchase_status" class="form-label">Status</label>
                        <select name="purchase_status" class="form-select" id="purchase_status">
                            <option value="Painding">Painding</option>
                            <option value="Received">Received</option>
                            <option value="Complete">Complete</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="purchase_status" class="form-label">Order No</label>
                        <input type="text" class="form-control disabled" value="OD-01" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            {{-- <input type="search" class="form-control" placeholder="Search product"> --}}

            {{-- <div class="product_grid" id="products"></div> --}}
            <div class="d-flex justify-content-end">
                <button class="btn btn-success my-2" id="select_product"><i class="fa fa-plus"></i>&nbsp; Select Product</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Sales Price</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" width="60">Action</th>
                      </tr>
                    </thead>
                    <tbody id="selected_items">
                      
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <label for="" class="col-sm-4 control-label">Total Quantities</label>    
                        <div class="col-sm-8">
                           <label class="control-label total_quantity text-success" style="font-size: 15pt;">0</label>
                        </div>
                     </div>
                     <div class="row">
                        <label for="other_charges_input" class="col-sm-4 control-label">Other Charges</label>    
                        <div class="col-sm-8">
                            <input type="text" class="form-control text-right only_currency" id="other_charges_input" name="other_charges_input" onkeyup="final_total();" value="">
                        </div>
                     </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>


@push('js')
<script>
$(function() {
    $('#select_product').click(function() {
        NL_Modal.open({
            size: 'lg',
            title: 'Select Product',
            preload: true,
            body: function(body_class, obj) {
                $.ajax({
                    type: 'get',
                    url: `{{ route('admin.purchase.filter_product') }}`,
                    success: function(data) {
                        body_class.html(data);
                    }
                });
            }
        });
    });
});

function add_item(info) {
    let html = `
        <tr>
            <td>
                <img src="{{ url('') }}/${info.image}" alt="" width="50">
            </td>
            <td>${info.name}</td>
            <td>${info.sell_price}</td>
            <td>
                <input type="number" name="purchase_price" value="${info.sell_price}" class="form-control">
            </td>
            <td>
                <input type="number" name="quantity" value="1" class="form-control">
            </td>
            <td>
                <button class="btn btn-sm btn-danger" onclick="remove_item(this)"><i class="fa fa-minus"></i></button>
            </td>
        </tr>
    `;
    $('#selected_items').append(html);
}

function remove_item(item) {
    item.closest('tr').remove();
}

</script>    
@endpush


@endsection
