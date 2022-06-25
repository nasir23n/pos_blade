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
    @include('backend.purchase.product_grid')
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
        cart.add(info);
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