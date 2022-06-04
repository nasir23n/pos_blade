{{-- products --}}
<div class="my-3" id="notify_wrap"></div>
<div class="col-md-12">
    <div class="input-group my-4">
        <input type="search" id="search_product" class="form-control" placeholder="Search Product" autofocus>
        <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
</div>

<div class="product_grid" id="products">
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
</div>


<script>

$(function() {
    // document.getElementById('search_product').focus();
    
    // $('.modal_body').prepend(`<div class="my-3" id="notify_wrap"></div>`);
    
});
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

</script>