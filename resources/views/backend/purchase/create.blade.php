@extends('backend.layouts.app')

@section('content')
<style>
thead, tbody, tfoot, tr, td, th {
    vertical-align: middle;
}
</style>
    <h1 class="content_header">Purchase</h1>
    @include('backend.global.alert')
    <form action="{{ route('admin.purchase.store') }}" id="purchase_form" method="post">
        @csrf

    </form>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="row col-lg-8">
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="supplier_id" class="col-sm-3 col-form-label">Select Supplier</label>
                            <div class="col-sm-9">
                                <select name="supplier_id" id="supplier_id" form="purchase_form" class="form-select" required>
                                    @foreach ($suppliers as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="date" id="date" class="form-control" form="purchase_form" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" id="date" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success my-2" id="select_product"><i class="fa fa-plus"></i>&nbsp; Select Product</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-bg-green-100">
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col" width="60">Action</th>
                      </tr>
                    </thead>
                    <tbody id="selected_items"></tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" style="text-align: right;"><strong>Total:</strong></td>
                            <td class="sub_total" colspan="2">0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Other Charges</div>
                          </div>
                          <input type="number" class="form-control" form="purchase_form" id="other_charges_input" name="other_charges_input" value="0" style="max-width: 200px;" min="0">
                        </li>
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Transport Cost</div>
                          </div>
                          <input type="number" class="form-control" form="purchase_form" id="transport_cost_input" name="transport_cost_input" value="0" style="max-width: 200px;" min="0">
                        </li>
                        <li class="list-group-item d-md-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount All</div>
                          </div>
                          <input type="number" class="form-control" form="purchase_form" id="discount_all_input" name="discount_all_input" value="0" style="max-width: 200px;" min="0">
                        </li>
                        <li class="list-group-item d-sm-flex justify-content-between align-items-center">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">Note</div>
                          </div>
                          <textarea name="note" class="form-control" form="purchase_form" id="note" rows="2" placeholder="Note" style="max-width: 500px;"></textarea>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">Subtotal</div>
                            </div>
                            <strong class="sub_total">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Transport cost</div>
                            </div>
                            <strong class="transport_cost">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Other Charge</div>
                            </div>
                            <strong class="other_charges">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Discount All</div>
                            </div>
                            <strong class="discount_all">0</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Grand Total</div>
                            </div>
                            <strong class="grand_total">0</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-top-0">
        <div class="card-body">
            <div class="col-md-12 my-4">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="amount">Amount</label>
                        <input type="number" form="purchase_form" class="form-control" id="amount" name="amount" placeholder="Amount" min="0">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="payment_method" class="form-label">Payment Method</label>
                        <select class="form-select" form="purchase_form" id="payment_method" name="payment_method">
                            @foreach ($payment_methods as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="payment_note" class="form-label">Payment Note</label>
                        <textarea type="text" form="purchase_form" class="form-control" id="payment_note" name="payment_note" placeholder="Payment Note"></textarea>
                    </div>
                </div>
                <br>
                <div class="d-flex gap-2 col-6 mx-auto">
                    <button type="submit" form="purchase_form" class="btn btn-primary col-6" type="button">Save</button>
                    <button class="btn btn-secondary col-6" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>

@push('js')
<script>

const cart = {
    selected_product: [],
    add(info) {
        if (!this.exist(info.id)) {
            this.selected_product.push(info);
        } else {
            this.increment(info.id);
        }
        this.render();
    },
    increment(id) {
        let index = this.selected_product.findIndex(item => item.id === id);
        this.selected_product[index].quantity++;
    },
    exist(id) {
        let p = this.selected_product.filter((product) => product.id === id);
        return (p.length > 0) ? true : false;
    },
    remove_item(id) {
        let index = this.selected_product.findIndex(item => item.id === id);
        this.selected_product.splice(index, 1);
        this.render();
    },
    quantity(_self, id) {
        if (!_self.value || _self.value <= 0) {
            _self.value = 1;
        }
        let index = this.selected_product.findIndex(item => item.id === id);
        this.selected_product[index].quantity = _self.value;
        $(_self).parents('tr').find('.item_total').html(this.selected_product[index].purchase_price * _self.value);
        this.calculate_total();
    },
    render() {
        let html = '';
        this.selected_product.forEach(function(info) {
            html += `
               <tr>
                   <td>
                       <input type="hidden" name="product_id[]" form="purchase_form" value="${info.id}" />
                       <img src="{{ url('') }}/${info.image}" alt="" width="50">
                   </td>
                   <td>${info.name}</td>
                   <td>
                        ${info.purchase_price}
                   </td>
                   <td>
                       <input type="number" form="purchase_form" name="quantity[]" value="${info.quantity}" class="form-control quantity" oninput="cart.quantity(this, ${info.id})" min="0">
                   </td>
                   <td class="item_total">
                       ${Number(info.purchase_price) * Number(info.quantity)}
                   </td>
                   <td>
                       <button class="btn btn-sm btn-danger" onclick="cart.remove_item(${info.id})"><i class="fa fa-minus"></i></button>
                   </td>
               </tr>
           `;
        });
        $('#selected_items').html(html);
        this.calculate_total();
    },
    calculate_total() {
        let total = 0;
        let disc_all = Number($('#discount_all_input').val());
        let other_chasge = Number($('#other_charges_input').val());
        let transport_cost = Number($('#transport_cost_input').val());
        this.selected_product.forEach((item) => {
            total += Number(item.purchase_price) * Number(item.quantity);
        });
        $('.sub_total').html(total);
        $('.discount_all').html(disc_all);
        $('.other_charges').html(other_chasge);
        $('.transport_cost').html(transport_cost);
        $('.grand_total').html((total + other_chasge + transport_cost) - disc_all);
    }
}
$('#discount_all_input, #other_charges_input, #transport_cost_input').on('input', function() {
    cart.render();
});
console.log(cart);

$('#select_product').click(function() {
    NL_Modal.open({
        size: 'lg',
        title: 'Select Product',
        preload: true,
        body: function(body_class, obj) {
            $.ajax({
                type: 'get',
                url: `{{ route('admin.purchase.get_products') }}`,
                success: function(data) {
                    body_class.html(data);
                    // body_class.prepend(`<div class="my-3" id="notify_wrap"></div>`);
                }
            });
        }
    });
});

// $('#amount').on('input change', function(e) {
//     if ($(this).attr('max')) {
//         let max_val = Number($(this).attr('max'));
//         let value = Number($(this).val());
//         if (value > max_val) {
//             $(this).val(max_val);
//             alert('Payment could not be more then total amount');
//         }
//         // if (Number($(this).val()) > max_val) {
//         //     return false;
//         //     console.log(max_val);
//         // }
//     }
// });

// function add_item(info) {
//     // item_ids.push(info.id);
//     let html = `
//         <tr>
//             <td>
//                 <img src="{{ url('') }}/${info.image}" alt="" width="50">
//             </td>
//             <td>${info.name}</td>
//             <td>
//                 <input type="hidden" name="product_id[]" form="purchase_form" value="${info.id}" />
//                 <input class="form-control sell_price" form="purchase_form" type="number" name="sell_price[]" value="${info.sell_price}" min="0" disabled>
//             </td>
//             <td>
//                 <input type="number" form="purchase_form" class="form-control purchase_price" name="purchase_price[]" value="${info.purchase_price}" min="0" disabled>
//             </td>
//             <td>
//                 <input type="number" form="purchase_form" name="quantity[]" value="1" class="form-control quantity" min="0">
//             </td>
//             <td>
//                 <input type="number" class="form-control total_amount disabled" name="total_amount[]" value="${info.sell_price}" disabled>
//             </td>
//             <td>
//                 <button class="btn btn-sm btn-danger" onclick="remove_item(this, ${info.id})"><i class="fa fa-minus"></i></button>
//             </td>
//         </tr>
//     `;
//     // $('#selected_items').append(html);
//     // calculate_total();

//     // reactors();
// }
// function reactors() {
//     $('.quantity, .purchase_price, #discount_type, #other_charges_input, #discount_all_input').on('input change', function() {
//         calculate_total();
//     });
// }
// reactors();

// function remove_item(item, id) {
//     item_ids = item_ids.filter(item => item != id);
//     item.closest('tr').remove();
//     calculate_total();
// }
// function calculate_total() {
//     let purchase_price = 0;
//     let other_charge = $('#other_charges_input').val();
//     let discount_all_input = $('#discount_all_input').val();
//     let discount_type = $('#discount_type').val();

//     $('.purchase_price').each(function() {
//         let qty = $(this).parents('tr').find('.quantity');
//         let total = Number($(this).val()) * Number(qty.val());

//         purchase_price += total;

//         $(this).parents('tr').find('.total_amount').val(total);
//     });
//     $('.sub_total').html(purchase_price);

//     $('.other_charges').html(other_charge);

//     let total = purchase_price + Number(other_charge);

//     if (discount_type == 'Fixed') {
//         $('.discount_all').html(discount_all_input);
//         total = total - Number(discount_all_input);
//     }
//     if (discount_type == 'Per') {
//         $('.discount_all').html(discount_all_input+'%');
//         total = total - ((Number(discount_all_input) / 100) * total);
//     }

//     $('.grand_total').html(total);
//     $('#amount').attr('max', total);
// }

</script>    
@endpush


@endsection
