{{-- products --}}
<style>
#products_wrap {
    position: relative;
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
    @include('backend.purchase.product_grid')
</div>
{{-- <div class="product_grid" id="products">
    @foreach ($products as $item)
        @php
            $info = [
                'id' => $item->id,
                'name' => $item->name,
                'sell_price' => $item->latest_price->sell_price,
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
        </div>
    @endforeach
</div>
<hr>
<div class="col-md-12 my-4" id="p_pagin">
    {{ $products->links('pagination::bootstrap-5') }}
</div> --}}


<script>

$(function() {
    // document.getElementById('search_product').focus();
    let timeout;
    $('#search_product').on('input change', function() {
        let val = $(this).val();
        clearTimeout(timeout);
        $('.preload_musk').remove();
        timeout = setTimeout(() => { 
            $.ajax({
                type: 'get',
                beforeSend: function() {
                    $('#products_wrap').prepend(`<div class="preload_musk"><div class="spinner-border"></div></div>`);
                },
                url: `{{ route('admin.purchase.filter_product') }}`,
                data: {
                    name: val
                },
                success: function(output) {
                    $('#products_wrap').html(output);
                    render();
                }
            });
        }, 200); 
    });
    
});
render();
function render() {
    $('.item').click(function() {
        let info = JSON.parse($(this).attr('info'));
        $(this).addClass('active');
        // console.log(item_ids);
        if (item_ids.indexOf(info.id) >= 0) {
            console.log($('#notify_wrap'));
            $('#notify_wrap').html(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps. This item already selected.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `);
        } else {
            add_item(info);
        }
    });

    $('.item').each(function() {
        var id = $(this).attr('id');
        // console.log(id);
        if (item_ids.indexOf(Number(id)) >= 0) {
            $(this).addClass('active');
        }
    });
    // console.log(item_ids);
    
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