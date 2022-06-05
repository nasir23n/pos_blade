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
    @include('backend.sales.product_grid', compact('products'))
</div>


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
                url: `{{ route('admin.sales.filter_product') }}`,
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
    // $('.modal_body').prepend(`<div class="my-3" id="notify_wrap"></div>`);

});
render();
function render() {
    $('.item').click(function() {
        let info = JSON.parse($(this).attr('info'));
        // console.log(info);
        if(info.available_qty <= 0) {
            $('#notify_wrap').html(`
                <div class="alert alert-danger my-2 alert-dismissible fade show" role="alert">
                    This item is out of stock.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `);
        } 
        else if (item_ids.indexOf(info.id) >= 0) {
            console.log($('#notify_wrap'));
            $('#notify_wrap').html(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Opps. This item already selected.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `);
        } else {
            $(this).addClass('active');
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