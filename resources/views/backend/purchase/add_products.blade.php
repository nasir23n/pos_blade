{{-- products --}}
<style>
#products_wrap {
    position: relative;
}
.product_grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-gap: 10px;
    margin: 20px 0;
}
@media (max-width: 992px) {
    .product_grid {
        grid-template-columns: repeat(4, 1fr);
    }
}
@media (max-width: 700px) {
    .product_grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media (max-width: 470px) {
    .product_grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 360px) {
    .product_grid {
        grid-template-columns: repeat(1, 1fr);
    }
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

.preload_musk {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(9, 21, 102, 0.161);
    z-index: 9;
    left: 0;
    top: 0;
    color: #091566;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

<div id="notify_wrap"></div>
<div class="col-md-12">
    <div class="input-group py-4">
        <input type="search" id="search_product" class="form-control" placeholder="Search Product" autofocus>
        <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
</div>
<div id="products_wrap">
    <div class="product_grid" id="products">
        @foreach ($products as $item)
            @php
                $info = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'sell_price' => $item->latest_price->sell_price,
                    'available_qty' => $item->stock->available_qty,
                    'purchase_price' => $item->latest_price->purchase_price,
                    'image' => $item->image,
                ];
            @endphp
            <div class="item" id="{{ $item->id }}" info='@json($info)'>
                <div class="image">
                    <img src="{{ asset($item->image) }}" alt="">
                </div>
                <div class="description">
                    <p>{{ $item->name }}</p>
                    <strong>${{ @$item->latest_price->sell_price }}</strong>
                </div>
                <p class="text-center px-1">
                    Stock:
                    @if ($item->stock->available_qty <= 0)
                        <span class="badge bg-danger">{{ $item->stock->available_qty }}</span>
                    @else
                        <span class="badge bg-primary">{{ $item->stock->available_qty }}</span>
                    @endif
                </p>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="col-md-12 my-4" id="p_pagin">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>

<script>

// $(function() {
//     let timeout;
//     $('#search_product').on('input change', function() {
//         let val = $(this).val();
//         clearTimeout(timeout);
//         $('.preload_musk').remove();
//         timeout = setTimeout(() => { 
//             $.ajax({
//                 type: 'get',
//                 beforeSend: function() {
//                     $('#products_wrap').prepend(`<div class="preload_musk"><div class="spinner-border"></div></div>`);
//                 },
//                 url: `{{ route('admin.purchase.filter_product') }}`,
//                 data: {
//                     name: val
//                 },
//                 success: function(output) {
//                     $('#products_wrap').html(output);
//                     render();
//                 }
//             });
//         }, 200); 
//     });
    
// });

render();
function render() {
    $('.item').click(function() {
        let info = JSON.parse($(this).attr('info'));
        
        if (item_ids.indexOf(info.id) >= 0) {
            console.log($('#notify_wrap'));
            $('#notify_wrap').html(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps. This item already selected.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `);
        } else {
            // add_item(info);
            Swal.fire({
                title: 'Input Quantity',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off',
                    value: 1
                },
                showCancelButton: true,
                cancelButtonColor: 'var(--bs-red-500)',
                confirmButtonText: 'Add',
                showLoaderOnConfirm: true,
                preConfirm: (quantity) => {
                    return $.ajax({
                        url: `{{ route('admin.purchase.store_products', $purchase->id) }}`,
                        type: 'post',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: info.id,
                            quantity: quantity,
                        }
                    })
                    .then(function(res) {
                        console.log(res);
                        return res;
                    });
                },
                backdrop: true,
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: `Product Add Successfully`,
                        icon: 'success',
                        timer: 1500
                    });
                    $(this).addClass('active');
                }
            });
        }
    });

    $('.item').each(function() {
        var id = $(this).attr('id');
        if (item_ids.indexOf(Number(id)) >= 0) {
            $(this).addClass('active');
        }
    });


    $('#p_pagin').find('a.page-link').click(function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        $('.modal_body').prepend(`<div class="preload_musk"><div class="spinner-border"></div></div>`);
        $.ajax({
            type: 'get',
            url: url,
            success: function(data) {
                $('.modal_body').html(data);
            },
            error: function() {
                $('#notify_wrap').html(`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Opps! Something wrong.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `);
                $('.preload_musk').remove();
            }
        });
    });
}

</script>